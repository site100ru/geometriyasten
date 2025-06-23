<?php
// Регистрация кастомного типа записи "Портфолио"
function create_portfolio_post_type()
{
  register_post_type(
    'portfolio',
    array(
      'labels' => array(
        'name' => 'Портфолио',
        'singular_name' => 'Портфолио',
        'menu_name' => 'Портфолио',
        'add_new' => 'Добавить новое',
        'add_new_item' => 'Добавить новое портфолио',
        'edit_item' => 'Редактировать портфолио',
        'new_item' => 'Новое портфолио',
        'view_item' => 'Посмотреть портфолио',
        'search_items' => 'Поиск портфолио',
        'not_found' => 'Портфолио не найдено',
        'not_found_in_trash' => 'В корзине портфолио не найдено'
      ),
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'portfolio'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array('title', 'thumbnail'),
      'menu_icon' => 'dashicons-portfolio',
      'menu_position' => 5
    )
  );
}
add_action('init', 'create_portfolio_post_type');

// Добавление метабокса для галереи изображений
function add_portfolio_gallery_metabox()
{
  add_meta_box(
    'portfolio_gallery',
    'Галерея изображений',
    'portfolio_gallery_metabox_callback',
    'portfolio',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'add_portfolio_gallery_metabox');

// Callback для метабокса галереи
function portfolio_gallery_metabox_callback($post)
{
  wp_nonce_field('portfolio_gallery_nonce', 'portfolio_gallery_nonce_field');

  $gallery_images = get_post_meta($post->ID, '_portfolio_gallery', true);
  $gallery_images = !empty($gallery_images) ? $gallery_images : array();
  ?>

  <div id="portfolio-gallery-container">
    <div id="portfolio-gallery-images">
      <?php if (!empty($gallery_images)): ?>
        <?php foreach ($gallery_images as $image_id): ?>
          <?php $image_url = wp_get_attachment_image_src($image_id, 'thumbnail')[0]; ?>
          <div class="gallery-image-item" data-id="<?php echo $image_id; ?>">
            <img src="<?php echo $image_url; ?>" style="width: 100px; height: 100px; object-fit: cover;">
            <button type="button" class="remove-gallery-image">×</button>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" id="add-gallery-images" class="button button-primary">
      Добавить изображения
    </button>

    <input type="hidden" id="portfolio-gallery-ids" name="portfolio_gallery"
      value="<?php echo implode(',', $gallery_images); ?>">
  </div>

  <style>
    #portfolio-gallery-images {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 15px;
    }

    .gallery-image-item {
      position: relative;
      border: 2px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
    }

    .remove-gallery-image {
      position: absolute;
      top: 0;
      right: 0;
      background: #dc3232;
      color: white;
      border: none;
      width: 20px;
      height: 20px;
      cursor: pointer;
      font-size: 12px;
      line-height: 1;
    }

    .remove-gallery-image:hover {
      background: #a00;
    }
  </style>

  <script>
    jQuery(document).ready(function ($) {
      var mediaUploader;

      $('#add-gallery-images').on('click', function (e) {
        e.preventDefault();

        if (mediaUploader) {
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media({
          title: 'Выберите изображения для галереи',
          button: {
            text: 'Добавить изображения'
          },
          multiple: true,
          library: {
            type: 'image'
          }
        });

        mediaUploader.on('select', function () {
          var attachments = mediaUploader.state().get('selection');
          var currentIds = $('#portfolio-gallery-ids').val();
          var idsArray = currentIds ? currentIds.split(',') : [];

          attachments.each(function (attachment) {
            var attachmentData = attachment.toJSON();

            if (idsArray.indexOf(attachmentData.id.toString()) === -1) {
              idsArray.push(attachmentData.id);

              var imageHtml = '<div class="gallery-image-item" data-id="' + attachmentData.id + '">' +
                '<img src="' + attachmentData.sizes.thumbnail.url + '" style="width: 100px; height: 100px; object-fit: cover;">' +
                '<button type="button" class="remove-gallery-image">×</button>' +
                '</div>';

              $('#portfolio-gallery-images').append(imageHtml);
            }
          });

          $('#portfolio-gallery-ids').val(idsArray.join(','));
        });

        mediaUploader.open();
      });

      $(document).on('click', '.remove-gallery-image', function () {
        var imageItem = $(this).closest('.gallery-image-item');
        var imageId = imageItem.data('id');
        var currentIds = $('#portfolio-gallery-ids').val();
        var idsArray = currentIds.split(',');

        idsArray = idsArray.filter(function (id) {
          return id != imageId;
        });

        $('#portfolio-gallery-ids').val(idsArray.join(','));
        imageItem.remove();
      });
    });
  </script>
  <?php
}

// Сохранение данных галереи
function save_portfolio_gallery_metabox($post_id)
{
  if (
    !isset($_POST['portfolio_gallery_nonce_field']) ||
    !wp_verify_nonce($_POST['portfolio_gallery_nonce_field'], 'portfolio_gallery_nonce')
  ) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  $gallery_images = isset($_POST['portfolio_gallery']) ? $_POST['portfolio_gallery'] : '';
  $gallery_images_array = !empty($gallery_images) ? explode(',', $gallery_images) : array();
  $gallery_images_array = array_filter($gallery_images_array);

  update_post_meta($post_id, '_portfolio_gallery', $gallery_images_array);
}
add_action('save_post', 'save_portfolio_gallery_metabox');

// AJAX обработчик для получения портфолио с пагинацией
function get_portfolio_items_ajax()
{
  $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
  $per_page = 6; // Количество элементов на страницу

  // Получаем общее количество портфолио
  $total_query = get_posts(array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'fields' => 'ids'
  ));
  $total_items = count($total_query);

  // Получаем портфолио для текущей страницы
  $portfolio_items = get_posts(array(
    'post_type' => 'portfolio',
    'posts_per_page' => $per_page,
    'paged' => $page,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
  ));

  $items_html = '';
  $carousel_id_start = ($page - 1) * $per_page + 1;
  $items_html .= '<div class="row">';

  foreach ($portfolio_items as $index => $item) {

    $gallery_images = get_post_meta($item->ID, '_portfolio_gallery', true);

    if (!empty($gallery_images)) {
      $carousel_id = $carousel_id_start + $index;

      $items_html .= '<div class="col-12 col-md-6 section-image mb-3 portfolio-item" data-portfolio-id="' . $item->ID . '">';
      $items_html .= '<div id="carousel-' . $carousel_id . '" class="carousel slide" data-bs-ride="false" data-bs-interval="false">';
      $items_html .= '<div class="carousel-inner rounded">';

      $is_first = true;
      foreach ($gallery_images as $image_id) {
        $image_url = wp_get_attachment_image_src($image_id, 'large');
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true) ?: $item->post_title;

        if ($image_url) {
          $active_class = $is_first ? ' active' : '';
          $items_html .= '<div class="carousel-item gallery-2691-wrapper' . $active_class . '">';
          $items_html .= '<button class="gallery-2691" onclick="openGallery(\'carousel-' . $carousel_id . '\')">';
          $items_html .= '<div class="single-product-img approximation img-wrapper position-relative">';
          $items_html .= '<img src="' . $image_url[0] . '" class="d-block w-100" loading="lazy" alt="' . esc_attr($image_alt) . '" />';
          $items_html .= '<div class="overlay">';
          $items_html .= '<img src="' . get_template_directory_uri() . '/img/ico/zoom-icon.svg" alt="Zoom" class="zoom-icon" />';
          $items_html .= '</div>';
          $items_html .= '</div>';
          $items_html .= '</button>';
          $items_html .= '</div>';
          $is_first = false;
        }
      }

      $items_html .= '</div>';

      // Добавляем навигацию только если больше одного изображения
      if (count($gallery_images) > 1) {
        $items_html .= '<button class="carousel-control-prev" type="button" data-bs-target="#carousel-' . $carousel_id . '" data-bs-slide="prev">';
        $items_html .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        $items_html .= '<span class="visually-hidden">Previous</span>';
        $items_html .= '</button>';
        $items_html .= '<button class="carousel-control-next" type="button" data-bs-target="#carousel-' . $carousel_id . '" data-bs-slide="next">';
        $items_html .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        $items_html .= '<span class="visually-hidden">Next</span>';
        $items_html .= '</button>';
      }

      $items_html .= '</div>';
      $items_html .= '</div>';
    }
  }
  $items_html .= '</div>';

  $has_more = ($page * $per_page) < $total_items;

  wp_send_json_success(array(
    'html' => $items_html,
    'has_more' => $has_more,
    'current_page' => $page,
    'total_items' => $total_items,
    'loaded_items' => $page * $per_page
  ));
}
add_action('wp_ajax_get_portfolio_items', 'get_portfolio_items_ajax');
add_action('wp_ajax_nopriv_get_portfolio_items', 'get_portfolio_items_ajax');


// Подключение скриптов в админке
function portfolio_admin_scripts($hook)
{
  global $post_type;

  if ($hook == 'post-new.php' || $hook == 'post.php') {
    if ($post_type == 'portfolio') {
      wp_enqueue_media();
      wp_enqueue_script('jquery');
    }
  }
}
add_action('admin_enqueue_scripts', 'portfolio_admin_scripts');

// Функция для получения первых 6 портфолио на фронтенде
function get_portfolio_items_for_frontend($per_page = 6, $page = 1)
{
  $portfolio_items = get_posts(array(
    'post_type' => 'portfolio',
    'posts_per_page' => $per_page,
    'paged' => $page,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
  ));

  $items_html = '';
  $carousel_id = 1;

  foreach ($portfolio_items as $item) {
    $gallery_images = get_post_meta($item->ID, '_portfolio_gallery', true);

    if (!empty($gallery_images)) {
      $items_html .= '<div class="col-12 col-md-6 section-image mb-3 portfolio-item" data-portfolio-id="' . $item->ID . '">';
      $items_html .= '<div id="carousel-' . $carousel_id . '" class="carousel slide" data-bs-ride="false" data-bs-interval="false">';
      $items_html .= '<div class="carousel-inner rounded">';

      $is_first = true;
      foreach ($gallery_images as $image_id) {
        $image_url = wp_get_attachment_image_src($image_id, 'large');
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true) ?: $item->post_title;

        if ($image_url) {
          $active_class = $is_first ? ' active' : '';
          $items_html .= '<div class="carousel-item gallery-2691-wrapper' . $active_class . '">';
          $items_html .= '<button class="gallery-2691" onclick="openGallery(\'carousel-' . $carousel_id . '\')">';
          $items_html .= '<div class="single-product-img approximation img-wrapper position-relative">';
          $items_html .= '<img src="' . $image_url[0] . '" class="d-block w-100" loading="lazy" alt="' . esc_attr($image_alt) . '" />';
          $items_html .= '<div class="overlay">';
          $items_html .= '<img src="' . get_template_directory_uri() . '/img/ico/zoom-icon.svg" alt="Zoom" class="zoom-icon" />';
          $items_html .= '</div>';
          $items_html .= '</div>';
          $items_html .= '</button>';
          $items_html .= '</div>';
          $is_first = false;
        }
      }

      $items_html .= '</div>';

      // Добавляем навигацию только если больше одного изображения
      if (count($gallery_images) > 1) {
        $items_html .= '<button class="carousel-control-prev" type="button" data-bs-target="#carousel-' . $carousel_id . '" data-bs-slide="prev">';
        $items_html .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        $items_html .= '<span class="visually-hidden">Previous</span>';
        $items_html .= '</button>';
        $items_html .= '<button class="carousel-control-next" type="button" data-bs-target="#carousel-' . $carousel_id . '" data-bs-slide="next">';
        $items_html .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        $items_html .= '<span class="visually-hidden">Next</span>';
        $items_html .= '</button>';
      }

      $items_html .= '</div>';
      $items_html .= '</div>';

      $carousel_id++;
    }
  }

  return $items_html;
}

// Функция для проверки есть ли еще портфолио
function has_more_portfolio_items($page = 1, $per_page = 6)
{
  $total_portfolio = get_posts(array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'fields' => 'ids'
  ));

  $total_count = count($total_portfolio);
  return ($page * $per_page) < $total_count;
}

/**
 * Появление фиксированного заголовка при прокрутке
 * 
 * При прокрутке страницы больше чем на 100px, элемент с id="sliding-header"
 * получает класс "visible", благодаря которому он может, например, фиксироваться или анимированно появляться.
 * При прокрутке обратно вверх (меньше 100px) класс удаляется.
 * 
 * Используется флаг isVisible, чтобы избежать лишних изменений DOM.
 */

document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('sliding-header');
  let isVisible = false;

  window.addEventListener('scroll', function () {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > 100 && !isVisible) {
      header.classList.add('visible');
      isVisible = true;
    } else if (scrollTop <= 100 && isVisible) {
      header.classList.remove('visible');
      isVisible = false;
    }
  });
});


/**
 * Параллакс-эффект для секции .hero-section
 * 
 * При прокрутке страницы элемент .hero-section смещается вверх,
 * создавая эффект параллакса. Скорость регулируется множителем 0.35.
 * 
 * Эффект применяется только если .hero-section есть в DOM.
 */

window.addEventListener('scroll', function () {
  const section = document.querySelector('#carouselMain .carousel-background');
  console.log('section: ', section);
  const scrolled = window.scrollY;
  if (section) {
    // Параллакс через изменение позиции фона
    section.style.backgroundPositionY = `${50 - scrolled * 0.2}%`;
  }
});


// Скрипт для отслеживания активного блока и обновления класса active в меню
(function() {
    // Получаем все секции, которые нужно отслеживать
    const sections = [
        { id: 'carouselMain', href: '#carouselMain' },
        { id: 'jobs', href: '#jobs' },
        { id: 'plasters', href: '#plasters' },
        { id: 'price', href: '#price' },
        { id: 'contacts', href: '#contacts' }
    ];

    // Получаем все ссылки меню из разных мест
    const menuLinks = document.querySelectorAll('a[href^="#"]');
    
    // Функция для удаления класса active у всех ссылок
    function removeActiveClass() {
        menuLinks.forEach(link => {
            link.classList.remove('active');
        });
    }

    // Функция для добавления класса active к ссылкам с определенным href
    function addActiveClass(href) {
        menuLinks.forEach(link => {
            if (link.getAttribute('href') === href) {
                link.classList.add('active');
            }
        });
    }

    // Функция для определения активной секции
    function updateActiveSection() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;
        
        let activeSection = null;
        let minDistance = Infinity;

        sections.forEach(section => {
            const element = document.getElementById(section.id);
            if (!element) return;

            const rect = element.getBoundingClientRect();
            const elementTop = rect.top + scrollTop;
            const elementHeight = rect.height;
            const elementCenter = elementTop + elementHeight / 2;
            const viewportCenter = scrollTop + windowHeight / 2;

            // Вычисляем расстояние от центра экрана до центра секции
            const distance = Math.abs(elementCenter - viewportCenter);

            // Проверяем, видна ли секция на экране
            const isVisible = rect.top < windowHeight && rect.bottom > 0;

            if (isVisible && distance < minDistance) {
                minDistance = distance;
                activeSection = section;
            }
        });

        // Обновляем активные ссылки
        if (activeSection) {
            removeActiveClass();
            addActiveClass(activeSection.href);
        }
    }

    // Отслеживаем скролл с throttling для производительности
    let ticking = false;
    function onScroll() {
        if (!ticking) {
            requestAnimationFrame(() => {
                updateActiveSection();
                ticking = false;
            });
            ticking = true;
        }
    }

    // Запускаем отслеживание при загрузке страницы
    document.addEventListener('DOMContentLoaded', () => {
        updateActiveSection();
    });

    // Запускаем отслеживание при скролле
    window.addEventListener('scroll', onScroll);

    // Обновляем при изменении размера окна
    window.addEventListener('resize', updateActiveSection);

    // Обработка кликов по ссылкам меню для плавного скролла
    menuLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && href.startsWith('#')) {
            link.addEventListener('click', (e) => {
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    
                    // Плавный скролл к элементу
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Обновляем активную ссылку после скролла
                    setTimeout(() => {
                        removeActiveClass();
                        addActiveClass(href);
                    }, 100);
                }
            });
        }
    });
})();
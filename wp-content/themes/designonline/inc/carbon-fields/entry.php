<?

use Carbon_Fields\Container;
use Carbon_Fields\Field;





add_action('carbon_fields_register_fields', 'toshevvl_attach_theme_options');
function toshevvl_attach_theme_options()
{
    Container::make('theme_options', __('Лендинг'))
        ->set_icon('dashicons-admin-tools')
        ->add_tab('Общие настройки', [
            Field::make('text', 'crb_video_about', 'Ссылка на видео о компании')->set_width(100)
        ])

        ->add_tab('Главный экран', [

            Field::make('text', 'crb_mainblock_title', 'Заголовок (H1)')->set_width(100),
            Field::make('text', 'crb_mainblock_price', 'Цена')->set_width(100),
            Field::make('textarea', 'crb_mainblock_desc', 'Описание')->set_width(100),

            Field::make('complex', 'crb_benefist', 'Преимущества')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('text', 'crb_benefist_name', 'Наименование'),
                    Field::make('image', 'crb_benefist_image', 'Изображение (загрузка фото .png)'),
                ])->set_header_template('
                    <% if (crb_benefist_name) { %>
                        <%- crb_benefist_name %>
                    <% } %>
             '),

        ])

        ->add_tab('Направления (2 экран)', [
            Field::make('complex', 'crb_directions', 'Направления')
                
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->set_duplicate_groups_allowed(false)
                ->add_fields([
                    Field::make('image', 'crb_benefist_img', 'Обложка (загрузка фото .png)'),
                    Field::make('text', 'crb_directions_name', 'Наименование'),
                    Field::make('media_gallery', 'crb_benefist_gallery', 'Галерея')->set_type('image'),
                    
                ])->set_header_template('
                    <% if (crb_directions_name) { %>
                        <%- crb_directions_name %>
                    <% } %>
             ')
        ])

        ->add_tab('Построенные дома (слайдер)', [
            Field::make('complex', 'crb_portfolio', 'Построенные дома')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('text', 'crb_portfolio_name', 'Наименование'),
                    Field::make('image', 'crb_portfolio_photo', __('Фото (загрузка фото .png)'))
                ])->set_header_template('
                    <% if (crb_portfolio_name) { %>
                        <%- crb_portfolio_name %>
                    <% } %>
             ')
        ])

        ->add_tab('Видео объектов', [
            Field::make('complex', 'crb_video', 'Видео')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('image', 'crb_video_img', 'Обложка (загрузка фото .png)'),
                    Field::make('text', 'crb_video_linkvideo', 'Ссылка Видео'),
                    Field::make('text', 'crb_video_name', 'Наименование'),
                    Field::make('text', 'crb_video_desc', 'Описание'),
                ])->set_header_template('
                    <% if (crb_video_name) { %>
                        <%- crb_video_name %>
                    <% } %>
             ')
        ])

        ->add_tab('Комплектации', [
            Field::make('complex', 'crb_complect', 'Комплектации')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('text', 'crb_complect_name', 'Наименование'),
                    Field::make('textarea', 'crb_complect_desc', 'Описание'),
                    Field::make('text', 'crb_complect_price', 'Цена'),
                ])->set_header_template('
                    <% if (crb_complect_name) { %>
                        <%- crb_complect_name %>
                    <% } %>
             ')
        ])

        ->add_tab('Предложения', [
            Field::make('complex', 'crb_offer', 'Предложения')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('text', 'crb_offer_name', 'Наименование'),
                    Field::make('textarea', 'crb_offer_desc', 'Описание'),
                    Field::make('image', 'crb_offer_image', 'Изображение (загрузка фото .png)'),
                ])->set_header_template('
                    <% if (crb_offer_name) { %>
                        <%- crb_offer_name %>
                    <% } %>
             ')
        ])

        ->add_tab('Дополнительные услуги', [
            Field::make('complex', 'crb_dopservices', 'Дополнительные услуги')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('text', 'crb_dopservices_name', 'Наименование'),
                    Field::make('textarea', 'crb_dopservices_desc', 'Описание'),
                    Field::make('image', 'crb_dopservices_image', 'Изображение (загрузка фото .png)'),
                ])->set_header_template('
                    <% if (crb_dopservices_name) { %>
                        <%- crb_dopservices_name %>
                    <% } %>
             '),
            Field::make('image', 'crb_dopservices_sertificat', 'Сертификат (загрузка фото .png)')->set_width(100),
        ])

        ->add_tab('Часто задаваемые вопросы', [
            Field::make('complex', 'crb_faq', 'FAQ')
                ->setup_labels([
                    'plural_name' => '',
                    'singular_name' => '',
                ])
                ->set_collapsed(true)
                ->add_fields([
                    Field::make('text', 'crb_quest', 'Вопрос'),
                    Field::make('textarea', 'crb_answer', 'Ответ'),
                    Field::make('file', 'crb_file', 'Прикрепить файл')
                ])->set_header_template('
                    <% if (crb_quest) { %>
                        <%- crb_quest %>
                    <% } %>
             ')
        ])

        ->add_tab('СЕО', [
            Field::make('text', 'crb_seo_title', 'META-TITLE')->set_width(100),
            Field::make('textarea', 'crb_seo_description', 'META-DESCRIPTION')->set_width(100),
            Field::make('textarea', 'crb_seo_metrika', 'Яндекс метрика')->set_width(100),
            Field::make('textarea', 'crb_seo_google', 'Google')->set_width(100),
            Field::make('textarea', 'crb_seo_scripts', 'Различные скрипты')->set_width(100),
        ]);
}

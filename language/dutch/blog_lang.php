<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Berichten';
$lang['module_blog_categories'] = 'Categorieën';
$lang['module_blog_tags'] = 'Tags';
$lang['module_blog_comments'] = 'Reacties';
$lang['module_blog_links'] = 'Links';
$lang['module_blog_authors'] = 'Auteurs';
$lang['module_blog_settings'] = 'Instellingen';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Typ een reactie.';
$lang['blog_error_invalid_comment_email'] = 'Voer een geldig email adres in.';
$lang['blog_error_comment_site_submit'] = 'Reacties moeten geplaatst worden via het formulier op de website.';
$lang['blog_error_comment_already_submitted'] = 'Deze reactie is al geplaatst.';
$lang['blog_error_consecutive_comments'] = 'Wacht even met het plaatsen van nog een reactie.';
$lang['blog_error_delete_uncategorized'] = 'Je kunt geen ongecategoriseerd categorie verwijderen.';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Archief';
$lang['blog_authors_list_page_title'] = 'Auteurs';
$lang['blog_author_posts_page_title'] = '%s Berichten';
$lang['blog_categories_page_title'] = 'Categorieën';
$lang['blog_tags_page_title'] = 'Tags';
$lang['blog_search_page_title'] = '%s Zoek resultaten';

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Berichten %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; Vorige Pagina';
$lang['blog_next_page'] = 'Volgende Pagina &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


$lang['blog_error_no_posts_to_comment'] = 'Er is geen bericht om op te reageren.';
$lang['blog_post_is_not_published'] = 'Het bericht waar je op wilt reageren is niet gepubliceerd dus je wordt niet op de hoogte gehouden van reacties op je reactie.';
$lang['blog_comment_notify_option1'] = 'Allemaal';
$lang['blog_comment_notify_option2'] = 'Reaguurder';
$lang['blog_comment_notify_option3'] = 'Geen';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = 'Formatteren';
$lang['form_label_author'] = 'Auteur';
$lang['form_label_sticky'] = 'Sticky';
$lang['form_label_allow_comments'] = 'Reacties toestaan';
$lang['form_label_category'] = 'Categorie';
$lang['form_label_tags'] = 'Tags';
$lang['form_label_main_image'] = 'Hoofdbeeld';
$lang['form_label_list_image'] = 'List image';
$lang['form_label_thumbnail_image'] = 'Thumbnail afbeelding';
$lang['form_label_page_title'] = 'Pagina titel';
$lang['form_label_meta_description'] = 'Meta beschrijving';
$lang['form_label_meta_keywords'] = 'Meta keywords';
$lang['form_label_publish_date'] = 'Publicatie datum';
$lang['form_label_related_posts'] = 'Gerelateerde berichten';
$lang['form_label_blocks'] = 'Blokken';

$lang['form_category_comment'] = 'Categories must have context value of "blog" OR be empty in order to be used by the Blog module.';
$lang['form_tags_comment'] = 'Tags must belong to a category that has the context of "blog" or is empty in order to be used by the Blog module.';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Er is een reactie geplaatst.";
$lang['blog_comment_monitor_msg']= "Er is een rectie geplaatst bij jouw bericht. Om de reactie te zien log in op FUEL:";
$lang['blog_comment_reply_subject']= "%1s Blog Comment Reply";
$lang['blog_comment_reply_msg']= "%1s Heeft gereageerd op je reactie op artikel %2s.";

$lang['blog_captcha_text'] = "Voer de tekst in die je ziet in de afbeelding hierboven. <br />Als je de tekst niet kan lezen kun je het beste de pagina verversen.";

$lang['blog_comment_is_spam'] = "Je reactie kan niet geplaatst worden omdat deze gezien wordt als spam.";
$lang['blog_error_captcha_mismatch'] = "De tekst die je ingevoerd hebt komt niet overeen met de afbeelding.";

$lang['blog_email_flagged_as_spam'] = 'GEMARKEERD ALS SPAM!!!';
$lang['blog_email_published'] = 'Gepubliceerd';
$lang['blog_email_author_name'] = 'Naam van de auteur';
$lang['blog_email_author_email'] = 'Email van de auteur';
$lang['blog_email_author_website'] = 'Website';
$lang['blog_email_author_ip'] = 'IP van de auteur';
$lang['blog_email_content'] = 'Inhoud';
$lang['form_label_post_title'] = 'Titel van het bericht';
$lang['form_label_comment'] = 'Reactie';
$lang['form_label_comment_author_name'] = 'Naam van de auteur van de reactie';
$lang['form_label_is_spam'] = 'Is Spam';
$lang['form_label_post_published'] = 'Bericht gepubliceerd';
$lang['form_label_date_submitted'] = 'Datum van publicatie';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Reacties';
$lang['form_label_reply'] = 'Reactie';
$lang['form_label_commentor'] = 'Reaguurder';
$lang['form_label_reply_notify'] = 'Op de hoogte houden';
$lang['form_label_author_ip'] = 'Ip adres van de auteur';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Theme Locatie';
$lang['form_label_theme_layout'] = 'Theme Layout';
$lang['form_label_theme_module'] = 'Theme Module';
$lang['form_label_use_cache'] = 'Gebruik Cache';
$lang['form_label_allow_comments'] = 'Reacties toestaan';
$lang['form_label_monitor_comments'] = 'Monitor Reacties';
$lang['form_label_use_captchas'] = 'Gebruik Captchas';
$lang['form_label_save_spam'] = 'Sla Spam op';
$lang['form_label_akismet_api_key'] = 'Akismet Key';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Tijd limiet voor het indienen van reacties';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (in seconden)';
$lang['form_label_comments_time_limit'] = 'Reacties toestaan voor hoe lang';
$lang['form_label_comments_time_limit_after_html'] = ' Na het plaatsen van het bericht (in dagen)';
$lang['form_label_cache_ttl'] = 'Cache Time to Live';
$lang['form_label_asset_upload_path'] = 'Asset Upload Path';
$lang['form_label_per_page'] = 'Per Pagina';
$lang['form_label_page_title_separator'] = 'Page Title Separator';
$lang['form_label_email_notify_comment_reply'] = 'E-mail notifications on comment replies';


/*
|--------------------------------------------------------------------------
| Front-end
|--------------------------------------------------------------------------
*/
$lang['blog_blog'] = 'Blokken';
$lang['blog_archives'] = 'Archief';
$lang['blog_categories'] = 'Categorieën';
$lang['blog_category_posts'] = '%1s Berichten';
$lang['blog_tags'] = 'Tags';
$lang['blog_tags_posts'] = '%1s berichten';
$lang['blog_publish_date_format'] = 'D, M, Y';
$lang['blog_post_published'] = 'Geplaatst';
$lang['blog_post_published_by'] = 'Door';
$lang['blog_post_read_more'] = 'Meer lezen';
$lang['blog_post_date_format'] = 'D, M, Y';
$lang['blog_post_text_comments'] = 'reacties';
$lang['blog_post_text_comment'] = 'reactie';
$lang['blog_post_excerpt_text'] = 'vervolgd..';
$lang['blog_search_nothing'] = 'Niets gevonden voor <strong>%1s</strong>';
$lang['blog_search_plural'] = '%1s resulataat van <strong>%2s</strong>';
$lang['blog_search_singular'] = '%1s resulataten van <strong>%2s</strong>';
$lang['blog_pagination_all'] = 'Terug naar alle berichten';
$lang['blog_pagination_next'] = 'Volgende';
$lang['blog_pagination_prev'] = 'Vorige';
$lang['blog_comment_heading'] = 'Reactie';
$lang['blog_comments_heading'] = 'Reacties';
$lang['blog_leave_comment_heading'] = 'Reageer';
$lang['blog_comments_off'] = 'Reageren op dit bericht is uitgeschakeld.';
$lang['blog_comment_thanks'] = 'Bedankt voor je reactie!';
$lang['blog_comments_monitored'] = 'Reacties op dit bericht moeten worden goedgekeurd door de auteur\'s.';
$lang['blog_share'] = 'Deel dit bericht';
$lang['blog_related_posts'] = 'Gerelateerde berichten';
$lang['blog_links'] = 'Aanbevolen Links';
$lang['blog_about_author'] = 'Over de auteur';
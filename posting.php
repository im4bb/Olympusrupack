<?php
/** 
*
* posting [Russian]
*
* @package language
* @version $Id: posting.php,v 1.45 2006/11/24 14:45:13 dhn2 Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Добавить вложения',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Если вы не хотите добавлять вложения, оставьте поля пустыми.',
	'ADD_FILE'					=> 'Добавить файл',
	'ADD_POLL'					=> 'Добавить опрос',
	'ADD_POLL_EXPLAIN'			=> 'Если вы не хотите добавлять опрос к вашему сообщению, оставьте поля пустыми',
	'ALREADY_DELETED'			=> 'Это сообщение уже удалено.',
	'ATTACH_QUOTA_REACHED'		=> 'Достигнут максимальный общий размер ваших вложений. Пожалуйста, обратитесь к администратору по интересующим вас вопросам.',
	'ATTACH_SIG'				=> 'Присоединить подпись (подпись можно изменять в Пользовательском разделе)',

	'BBCODE_B_HELP'				=> 'Жирный текст: [b]text[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Код: [code]code[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Список: добавить элемент списка',
	'BBCODE_F_HELP'				=> 'Размер шрифта: [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ВЫКЛЮЧЕН</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>ВКЛЮЧЕН</em>',
	'BBCODE_I_HELP'				=> 'Наклонный текст: [i]text[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Список: [list]text[/list]  (alt+l)',
	'BBCODE_O_HELP'				=> 'Нумерованный список: [list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Вставить изображение: [img]http://image_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Цитата: [quote]text[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Цвет шрифта: [color=red]text[/color] Совет: Вы можете использовать также color=#FF0000',
	'BBCODE_U_HELP'				=> 'Подчеркнутый текст: [u]text[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Вставить ссылку: [url]http://url[/url] или [url=http://url]URL text[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Флэш: [flash=width,height]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'Вы не можете поднимать тему сразу после последнего сообщения. Попробуйте чуть позже.',

	'CANNOT_DELETE_REPLIED'		=> 'Вы можете удалять только сообщения, не имеющие ответов.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Это сообщение было заблокировано, вы не можете его редактировать.',
	'CANNOT_EDIT_TIME'			=> 'Вы больше не можете редактировать или удалять это сообщение',
	'CANNOT_POST_ANNOUNCE'		=> 'Вы не можете создавать объявления.',
	'CANNOT_POST_NEWS'			=> 'Вы не можете начинать новые темы.',
	'CANNOT_POST_STICKY'		=> 'Вы не можете создавать прикрепленные темы.',
	'CHANGE_TOPIC_TO'			=> 'Изменить тему на',
	'CLOSE_TAGS'				=> 'Закрыть тэги',
	'CURRENT_TOPIC'				=> 'Текущая тема',

	'DELETE_FILE'				=> 'Удалить файл',
	'DELETE_MESSAGE'			=> 'Удалить сообщение',
	'DELETE_MESSAGE_CONFIRM'	=> 'Вы уверены, что хотите удалить это сообщение?',
	'DELETE_OWN_POSTS'			=> 'Извините, но вы можете удалять только ваши собственные сообщения.',
	'DELETE_POST_CONFIRM'		=> 'Вы уверены, что хотите удалить это сообщение?',
	'DELETE_POST_WARN'			=> 'Удаленное сообщение восстановить невозможно',
	'DISABLE_BBCODE'			=> 'Отключить в этом сообщении BBCode',
	'DISABLE_MAGIC_URL'			=> 'Не преобразовывать адреса URL в ссылки',
	'DISABLE_SMILIES'			=> 'Отключить в этом сообщении смайлики',
	'DISALLOWED_EXTENSION'		=> 'Расширение %s запрещено администратором',
	'DRAFT_LOADED'				=> 'Черновик загружен, вы можете закончить редактирование сообщения сейчас.<br />После размещения сообщения черновик будет удален.',
	'DRAFT_SAVED'				=> 'Черновик успешно сохранен.',
	'DRAFT_TITLE'				=> 'Название черновика',

	'EDIT_REASON'				=> 'Причина редактирования сообщения',
	'EMPTY_FILEUPLOAD'			=> 'Загруженный файл пустой',
	'EMPTY_MESSAGE'				=> 'Вы должны ввести текст сообщения',
	'EMPTY_REMOTE_DATA'			=> 'Невозможно загрузить файл, пожалуйста, попробуйте загрузить вручную.',

	'FLASH_IS_OFF'				=> '[flash] <em>ВЫКЛЮЧЕН</em>',
	'FLASH_IS_ON'				=> '[flash] <em>ВКЛЮЧЕН</em>',
	'FLOOD_ERROR'				=> 'Вы не можете отправить следующее сообщение сразу после предыдущего. Пожалуйста, попробуйте попозже.',
	'FONT_COLOR'				=> 'Цвет шрифта',
	'FONT_HUGE'					=> 'Огромный',
	'FONT_LARGE'				=> 'Большой',
	'FONT_NORMAL'				=> 'Нормальный',
	'FONT_SIZE'					=> 'Размер шрифта',
	'FONT_SMALL'				=> 'Маленький',
	'FONT_TINY'					=> 'Очень маленький',

	'GENERAL_UPLOAD_ERROR'		=> 'Невозможно загрузить вложение %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>ВЫКЛЮЧЕН</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>ВКЛЮЧЕН</em>',
	'INVALID_FILENAME'			=> '%s является недопустимым именем файла',

	'LOAD'						=> 'Загрузить',
	'LOAD_DRAFT'				=> 'Загрузить черновик',
	'LOAD_DRAFT_EXPLAIN'		=> 'Вы можете выбрать черновик для продолжения редактирования сообщения. Ваше текущее сообщение будет удалено, содержание сообщения будет утеряно. <br />Просматривать, редактировать и удалять черновики вы можете в Пользовательском разделе.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Вам необходимо авторизоваться для поднятия темы на этом форуме.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Вам необходимо авторизоваться для удаления сообщений на этом форуме.',
	'LOGIN_EXPLAIN_POST'		=> 'Вам необходимо авторизоваться для создания сообщений на этом форуме.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Вам необходимо авторизоваться для цитирования сообщений на этом форуме.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Вам необходимо авторизоваться, чтобы отвечать в темах на этом форуме.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Вы можете использовать шрифты размером не более %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Ваши флэш-файлы должны быть не более %1$d пикс. в высоту.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Ваши флэш-файлы должны быть не более %1$d пикс. в ширину.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Ваши изображения должны быть не более %1$d пикс. в высоту.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Ваши изображения должны быть не более %1$d пикс. в ширину.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Введите текст вашего сообщения. Длина сообщения в симоволах не более: <strong>%d</strong>.',
	'MESSAGE_DELETED'			=> 'Сообщение было успешно удалено.',
	'MORE_SMILIES'				=> 'Еще смайлики ...',

	'NOTIFY_REPLY'				=> 'Сообщать мне о получении ответа',
	'NOT_UPLOADED'				=> 'Невозможно загрузить файл.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Вы не можете удалять существующие варианты опроса',
	'NO_POLL_TITLE'				=> 'Вы должны ввести название опроса',
	'NO_POST'					=> 'Сообщение не существует.',
	'NO_POST_MODE'				=> 'Не указан режим сообщения.',
	'NO_TOPIC_ICON'				=> 'Нет',

	'PARTIAL_UPLOAD'			=> 'Этот файл загружен только частично',
	'PHP_SIZE_NA'				=> 'Вложение слишком велико.<br />Невозможно превышать ограничение, установленное в PHP.<br />Невозможно определить максимальный размер закачиваемых файлов, определенный в php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Вложение слишком велико.<br />Максимальный размер закачиваемого файла: %d Мб.<br />Имейте в виду, что эта величина определена в php.ini и средствами форума невозможно изменить это значение в большую сторону.',
	'PLACE_INLINE'				=> 'Вставить в текст сообщения',
	'POLL_DELETE'				=> 'Удалить опрос',
	'POLL_FOR'					=> 'Опрос должен идти',
	'POLL_FOR_EXPLAIN'			=> 'Введите 0 или оставьте поле пустым, чтобы опрос не кончался',
	'POLL_MAX_OPTIONS'			=> 'Вариантов ответа',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Количество вариантов ответа, разрешенных при голосовании.',
	'POLL_OPTIONS'				=> 'Варианты ответа',
	'POLL_OPTIONS_EXPLAIN'		=> 'Разместите каждый вариант ответа в новой строке. Вы можете ввести не более <strong>%d</strong> вариантов',
	'POLL_QUESTION'				=> 'Вопрос',
	'POLL_VOTE_CHANGE'			=> 'Разрешить изменять ответ',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Если разрешено, пользователи могут менять свои ответы в опросе.',
	'POSTED_ATTACHMENTS'		=> 'Опубликованные вложения',
	'POST_CONFIRMATION'			=> 'Код подтверждения (на картинке)',
	'POST_CONFIRM_EXPLAIN'		=> 'Введите код в точности так, как вы его видите. Код является регистрозависимым. Если вы не видите код на картинке, то обратитесь к %sадминистратору%s',
	'POST_DELETED'				=> 'Ваше сообщение было успешно удалено.',
	'POST_EDITED'				=> 'Ваше сообщение было успешно отредактировано.',
	'POST_EDITED_MOD'			=> 'Ваше сообщение было отредактировано, но требует одобрения модератора.',
	'POST_GLOBAL'				=> 'Общее объявление',
	'POST_ICON'					=> 'Иконка для сообщения',
	'POST_NORMAL'				=> 'Обычная',
	'POST_REPLY'				=> 'Ответить',
	'POST_REVIEW'				=> 'Предварительный просмотр',
	'POST_REVIEW_EXPLAIN'		=> 'Было уже добавлено по крайней мере одно сообщение в этой теме. Вы можете сделать предварительный просмотр вашего сообщения.',
	'POST_STORED'				=> 'Ваше сообщение было успешно добавлено.',
	'POST_STORED_MOD'			=> 'Ваше сообщение было успешно добавлено, но требует одобрения модератора.',
	'POST_TOPIC'				=> 'Начать новую тему',
	'POST_TOPIC_AS'				=> 'Статус создаваемой темы',
	'PROGRESS_BAR'				=> 'Индикатор загрузки',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Вы можете делать не более %1$d цитирований в сообщении.',

	'SAVE'						=> 'Сохранить',
	'SAVE_DATE'					=> 'Сохранено в ',
	'SAVE_DRAFT'				=> 'Сохранить черновик',
	'SAVE_DRAFT_CONFIRM'		=> 'Пожалуйста обратите внимание, что сохраняемый черновик будет включать только название сообщения и текст, любые другие элементы будут удалены.<br />Вы хотите сохранить черновик сейчас?',
	'SMILIES'					=> 'Смайлики',
	'SMILIES_ARE_OFF'			=> 'Смайлики <em>ВЫКЛЮЧЕНЫ</em>',
	'SMILIES_ARE_ON'			=> 'Смайлики <em>ВКЛЮЧЕНЫ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Срок для объявления/прикрепления',
	'STICK_TOPIC_FOR'			=> 'Тема будет прикреплена',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Введите 0 или оставьте поле пустым, чтобы тема всегда была объявлением или прикрепленной.',
	'STYLES_TIP'				=> 'Подсказка: Можно быстро применить стили к выделенному тексту.',

	'TOO_FEW_CHARS'				=> 'Ваше сообщение слишком короткое.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Вы должны ввести по крайней мере два варианта ответов в опросе.',
	'TOO_MANY_ATTACHMENTS'		=> 'Вложение невозможно, так как в сообщении достигнуто их максимальное количество: <b>(%d)</b>.',
	'TOO_MANY_CHARS'			=> 'Ваше сообщение слишком длинное.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Вы выбрали слишком много вариантов ответа в опросе.',
	'TOO_MANY_SMILIES'			=> 'Ваше сообщение содержит слишком много смайликов. Разрешено максимум %d смайликов.',
	'TOO_MANY_URLS'				=> 'Ваше сообщение содержит слишком много ссылок URL. Разрешено максимум %d ссылок.',
	'TOO_MANY_USER_OPTIONS'		=> 'Слишком много вариантов опроса.',
	'TOPIC_BUMPED'				=> 'Тема успешно поднята.',

	'UNAUTHORISED_BBCODE'		=> 'Вы не можете использовать некоторые BBCode: ',
	'UNGLOBALISE_EXPLAIN'		=> 'Для того, чтобы изменить статус темы с общей на нормальную, вы должны выбрать форум, в котором она будет опубликовано.',
	'UPDATE_COMMENT'			=> 'Обновить комментарий',
	'URL_INVALID'				=> 'Указанный URL неверный',
	'URL_NOT_FOUND'				=> 'Указанный файл не найден.',
	'URL_IS_OFF'				=> '[url] <em>ВЫКЛЮЧЕН</em>',
	'URL_IS_ON'					=> '[url] <em>ВКЛЮЧЕН</em>',
	'USER_CANNOT_BUMP'			=> 'Вы не можете поднимать темы в этом форуме',
	'USER_CANNOT_DELETE'		=> 'Вы не можете удалять сообщения в этом форуме',
	'USER_CANNOT_EDIT'			=> 'Вы не можете редактировать сообщения в этом форуме',
	'USER_CANNOT_REPLY'			=> 'Вы не можете отвечать на сообщения в этом форуме',
	'USER_CANNOT_FORUM_POST'	=> 'Вы не можете размещать сообщения в этом форуме. Тип форума не поддерживает этого.',

	'VIEW_MESSAGE'				=> '%sПросмотреть ваше сообщение%s',

	'WRONG_FILESIZE'			=> 'Вложение слишком велико. <br/>Максимальный размер: %d %s',
	'WRONG_SIZE'				=> 'Минимальные размеры изображения должны быть %1$d пикс. в ширину и %2$d пикс. в высоту, максимальные - %3$d пикс. в ширину и %4$d пикс. в высоту. Размер загруженного изображения: %5$d пикс. в ширину и %6$d пикс. в высоту.',
));

?>
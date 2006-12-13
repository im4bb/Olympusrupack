<?php
/** 
*
* groups [Russian]
*
* @package language
* @version $Id: groups.php,v 1.15 2006/10/30 16:19:32 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'	=> 'Выбранная группа уже является вашей группой по умолчанию',
	'ALREADY_IN_GROUP'		=> 'Вы уже являетесь членом выбранной группы',

	'CHANGED_DEFAULT_GROUP'	=> 'Группа по умолчанию успешно изменена',
	
	'GROUP_AVATAR'						=> 'Аватара группы', 
	'GROUP_CHANGE_DEFAULT'				=> 'Вы уверены, что хотите изменить вашу группу по умолчанию на “%s”?',
	'GROUP_CLOSED'						=> 'Группа с закрытым членством',
	'GROUP_DESC'						=> 'Описание группы',
	'GROUP_HIDDEN'						=> 'Скрытая группа',
	'GROUP_INFORMATION'					=> 'Информация о группе', 
	'GROUP_IS_CLOSED'					=> 'Это группа с закрытым членством, автоматическое добавление пользователей не разрешается.',
	'GROUP_IS_FREE'						=> 'Это группа со свободным членством, любой пользователь может вступить в неё.', 
	'GROUP_IS_HIDDEN'					=> 'Это скрытая группа, только члены этой группы могут просматривать список входящих в нее пользователей.',
	'GROUP_IS_OPEN'						=> 'Это группа с открытым членством, любой пользователь может подать просьбу о вступлении.',
	'GROUP_IS_SPECIAL'					=> 'Это специальная группа, управляемая администратором форума.', 
	'GROUP_JOIN'						=> 'Вступить в группу',
	'GROUP_JOIN_CONFIRM'				=> 'Вы уверены, что хотите вступить в выбранную группу?',
	'GROUP_JOIN_PENDING'				=> 'Запрос на вступление в группу',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Вы уверены, что хотите запросить членство в этой группе?',
	'GROUP_JOINED'						=> 'Вы успешно вступили в выбранную группу',
	'GROUP_JOINED_PENDING'				=> 'Запрос на вступление в группу успешно отправлен. Пожалуйста, ожидайте подтверждения от руководителя группы.',
	'GROUP_LIST'						=> 'Управление пользователями',
	'GROUP_MEMBERS'						=> 'Члены группы',
	'GROUP_NAME'						=> 'Название группы',
	'GROUP_OPEN'						=> 'Группа с открытым членством',
	'GROUP_RANK'						=> 'Звание в группе', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Выйти из группы',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Вы уверены, что хотите выйти из выбранной группы?',
	'GROUP_RESIGN_PENDING'				=> 'Отозвать запрос на вступление в группу',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Вы уверены, что хотите отозвать запрос на вступление в выбранную группу?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Вы были успешно удалены из выбранной группы',
	'GROUP_RESIGNED_PENDING'			=> 'Ваш запрос на членство в выбранной группе успешно отозван',
	'GROUP_TYPE'						=> 'Тип группы',
	'GROUP_UNDISCLOSED'					=> 'Скрытая группа',
	'FORUM_UNDISCLOSED'					=> 'Модерирование скрытого форума(ов)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Вы должны войти для просмотра информации о группе',

	'NO_LEADERS'					=> 'Вы не являетесь руководителем какой-либо группы',
	'NOT_LEADER_OF_GROUP'			=> 'Запрошенная операция не может быть выполнена, поскольку вы не являетесь руководителем выбранной группы.',
	'NOT_MEMBER_OF_GROUP'			=> 'Запрошенная операция не может быть выполнена, поскольку вы не являетесь членом выбранной группы.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Вы не можете отказаться от членства в группе по умолчанию.',
	
	'PRIMARY_GROUP'		=> 'Основная группа',

	'REMOVE_SELECTED'		=> 'Удалить выбранное',

	'USER_GROUP_CHANGE'			=> 'Из группы “%1$s” в группу “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Отказаться от руководства',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Вы уверены, что хотите отказаться от руководства выбранной группой?',
	'USER_GROUP_DEMOTED'		=> 'Вы прекратили руководство группой.',
));

?>
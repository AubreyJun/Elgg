<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(

	/**
	 * Menu items and titles
	 */

	'item:object:page' => 'ページ',
	'collection:object:page' => 'ページ',
	'collection:object:page:all' => "サイト内のページ",
	'collection:object:page:owner' => "%sさんのページ",
	'collection:object:page:friends' => "友達のページ",
	'collection:object:page:group' => "グループページ",
	'add:object:page' => "ページを追加",
	'edit:object:page' => "このページを編集",

	'groups:tool:pages' => 'グループページを使用する',
	
	'annotation:delete:page:success' => 'The page revision was successfully deleted',
	'annotation:delete:page:fail' => 'The page revision could not be deleted',

	'pages:delete' => "このページを削除",
	'pages:history' => "履歴",
	'pages:view' => "ページをみる",
	'pages:revision' => "リビジョン",

	'pages:navigation' => "ナビゲーション",

	'pages:notify:summary' => '新規ページ「%s」が追加されました',
	'pages:notify:subject' => "新規ページ: %s",
	'pages:notify:body' =>
'%s added a new page: %s

%s

View and comment on the page:
%s',

	'pages:more' => 'More pages',
	'pages:none' => 'No pages created yet',

	/**
	* River
	**/

	'river:object:page:create' => '%s created a page %s',
	'river:object:page:update' => '%s updated a page %s',
	'river:object:page:comment' => '%s commented on a page titled %s',
	
	/**
	 * Form fields
	 */

	'pages:title' => 'タイトル',
	'pages:description' => '本文',
	'pages:tags' => 'タグ',
	'pages:parent_guid' => '親ページ',
	'pages:access_id' => '公開範囲',
	'pages:write_access_id' => '書込許可',

	/**
	 * Status and error messages
	 */
	'pages:cantedit' => 'このページの編集はできません。',
	'pages:saved' => 'ページを保存しました。',
	'pages:notsaved' => 'ページを保存できません。',
	'pages:error:no_title' => 'このページにはタイトルが付けられていません。タイトルをつけてください。',
	'entity:delete:object:page:success' => 'ページを削除しました。',
	'pages:revision:delete:success' => 'ページのリビジョンを削除しました。',
	'pages:revision:delete:failure' => 'ページのリビジョンを削除できませんでした。',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'リビジョンを作成しました： %s （作成者 %s ）',

	/**
	 * Widget
	 **/

	'pages:num' => '表示数',
	'widgets:pages:name' => 'ページ',
	'widgets:pages:description' => "あなたのページを一覧表示します。",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "ページをみる",
	'pages:label:edit' => "ページの編集",
	'pages:label:history' => "履歴",

	'pages:newchild' => "子ページを作成",
	
	/**
	 * Upgrades
	 */
	'pages:upgrade:2017110700:title' => "Migrate page_top to page entities",
	'pages:upgrade:2017110700:description' => "Changes the subtype of all top pages to 'page' and sets metadata to ensure correct listing.",
	
	'pages:upgrade:2017110701:title' => "Migrate page_top river entries",
	'pages:upgrade:2017110701:description' => "Changes the subtype of all river items for top pages to 'page'.",
);

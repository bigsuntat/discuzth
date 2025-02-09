<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_portalcp.php 30107 2012-05-11 02:10:58Z svn_project_zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview' => '<p>โมดูลนี้ประกอบด้วยโค้ด js จะไม่สามารถแสดงตัวอย่างได้ทันที</p>',
	'block_diy_summary_html_tag' => 'ข้อผิดพลาดในเนื้อหาที่กำหนดเอง แท็ก HTML: ',
	'block_diy_summary_not_closed' => ' ไม่ตรงกัน',
	'block_all_category' => 'หมวดหมู่ทั้งหมด',
	'block_first_category' => 'หมวดหมู่แรก',
	'block_all_forum' => 'บอร์ดทั้งหมด',
	'block_all_group' => 'วงในทั้งหมด',
	'block_all_type' => 'ประเภททั้งหมด',
	'file_size_limit' => 'ไฟล์ไม่สามารถมีขนาดใหญ่กว่า {size} KB กรุณาย้อนกลับ',
	'set_to_conver' => 'ตั้งเป็นภาพปก',
	'small_image' => 'รูปย่อ',
	'insert_small_image' => 'แทรกรูปภาพขนาดเล็ก',
	'insert_large_image' => 'แทรกรูปภาพขนาดใหญ่',
	'insert_file' => 'แทรกไฟล์',
	'delete' => 'ลบ',
	'upload_error' => 'อัปโหลดล้มเหลว',
	'upload_remote_failed' => 'อัปโหลดระยะไกลล้มเหลว',
	'article_noexist' => 'บทความที่ระบุไว้ไม่อยู่ กรุณาตรวจสอบ',
	'article_noallowed' => 'คุณไม่ได้รับอนุญาตให้ดำเนินการใดๆเกี่ยวกับบทความ',
	'article_publish_noallowed' => 'คุณไม่ได้รับอนุญาตให้ดำเนินการเผยแพร่บทความ',
	'article_category_empty' => 'ขออภัย! หมวดหมู่ไม่ควรว่างเปล่า',
	'article_edit_nopermission' => 'ขออภัย! คุณไม่ได้รับอนุญาตให้ดำเนินการที่เกี่ยวข้องในบทความปัจจุบัน',
	'article_publish' => 'เพิ่ม',
	'article_manage' => 'จัดการ',
	'article_tag' => 'คีย์เวิร์ด ',
	'select_category' => 'เลือกหมวดหมู่',
	'blockstyle_diy' => 'กำหนดรูปแบบด้วยตัวเอง',

	'article_pushplus_info' => '<p><center><i><a href="{url}" class="xg1 xs1">บทความนี้โดย {author}</a></i></center></p>',

	'diytemplate_name_null' => '[ชื่อยาวเกินไป]',
	'portal_view_name' => ' มุมมองแบบหน้า',
	'forum_viewthread_name' => ' มุมมองแบบรายการ',
	'portal/index' => 'หน้าแรกของเว็บไซต์',
	'portal/list' => 'หน้ารายการบทความ(สาธารณะ)',
	'portal/view' => 'หน้าเนื้อหาบทความ(สาธารณะ)',
	'portal/comment' => 'หน้าความคิดเห็นบทความ',
	'forum/discuz' => 'หน้าเว็บบอร์ด',
	'forum/viewthread' => 'หน้าเนื้อหากระทู้(สาธารณะ)',
	'forum/forumdisplay' => 'หน้ารายการกระทู้(สาธารณะ)',
	'group/index' => 'หน้า'.$_G['setting']['navs'][3]['navname'].'',
	'group/group_my' => 'หน้า'.$_G['setting']['navs'][3]['navname'].' ของฉัน',
	'group/group' => 'หน้าเนื้อหา'.$_G['setting']['navs'][3]['navname'].'',
	'home/space_home' => 'หน้าแรกสเปซ',
	'home/space_trade' => 'หน้าสินค้า',
	'home/space_top' => 'หน้าการจัดลำดับ',
	'home/space_thread' => 'หน้ากระทู้',
	'home/space_reward' => 'หน้ารางวัล',
	'home/space_share_list' => 'หน้ารายการข้อมูลที่นำมาแชร์',
	'home/space_share_view' => 'หน้าดูข้อมูลที่นำมาแชร์',
	'space_share_view' => 'หน้าแชร์',
	'home/space_poll' => 'หน้าโพลสำรวจ',
	'home/space_pm' => 'หน้าข้อความส่วนตัว',
	'home/space_notice' => 'หน้าข้อความแจ้งเตือน',
	'home/space_group' => 'หน้า'.$_G['setting']['navs'][3]['navname'].'',
	'home/space_friend' => 'หน้าเพื่อน',
	'home/space_favorite' => 'หน้ารายการโปรด',
	'home/space_doing' => 'หน้าข้อความทักทาย',
	'home/space_debate' => 'หน้าหัวข้อโต้วาที',
	'home/space_blog_view' => 'หน้าเนื้อหาบล็อก',
	'home/space_blog_list' => 'หน้ารายการบล็อก',
	'home/space_album_view' => 'หน้าดูอัลบั้ม',
	'home/space_album_pic' => 'หน้าดูรูปภาพ',
	'home/space_album_list' => 'หน้ารายการอัลบั้ม',
	'home/space_activity' => 'หน้ากิจกรรม',
	'ranklist/ranklist' => 'หน้ารายการจัดอันดับ',
	'ranklist/blog' => 'หน้าอันดับบล็อก',
	'ranklist/poll' => 'หน้าอันดับโพล',
	'ranklist/activity' => 'หน้าอันดับกิจกรรม',
	'ranklist/forum' => 'หน้าอันดับบอร์ด',
	'ranklist/picture' => 'หน้าอันดับรูปภาพ',
	'ranklist/group' => 'หน้าอันดับวงใน',
	'ranklist/thread' => 'หน้าอันดับกระทู้',
	'ranklist/member' => 'หน้าอันดับสมาชิก',
	'other_page' => 'ไม่มี DIY โมดูล',
	'upload' => 'อัปโหลด',
	'remote' => 'ระยะไกล',
	'portal_index' => 'หน้าแรกพอร์ทัล',
	'portal_topic_blue' => 'รูปแบบสีฟ้า',
	'portal_topic_green' => 'รูปแบบสีเขียว',
	'portal_topic_grey' => 'รูปแบบสีเทา',
	'portal_topic_red' => 'รูปแบบสีแดง',

	'itemtypename0' => 'อัตโนมัติ',
	'itemtypename1' => '<span style="color: #FF0000">แก้ไข</span>',
	'itemtypename2' => '<span style="color: #00BFFF">ตัวแก้ไข</span>',
	'itemtypename3' => '<span style="color: #0000FF">ดัน</span>',

);

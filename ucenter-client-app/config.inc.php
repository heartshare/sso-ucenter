<?php

define('UC_CONNECT', 'mysql');				// ���� UCenter �ķ�ʽ: mysql/NULL, Ĭ��Ϊ��ʱΪ fscoketopen()
// mysql ��ֱ�����ӵ���ݿ�, Ϊ��Ч��, ������� mysql

//��ݿ���� (mysql ����ʱ, ����û������ UC_DBLINK ʱ, ��Ҫ�������±���)
define('UC_DBHOST', 'localhost');			// UCenter ��ݿ�����
define('UC_DBUSER', 'root');				// UCenter ��ݿ��û���
define('UC_DBPW', '');					// UCenter ��ݿ�����
define('UC_DBNAME', 'ucenter');				// UCenter ��ݿ����
define('UC_DBCHARSET', 'gbk');				// UCenter ��ݿ��ַ�
define('UC_DBTABLEPRE', 'ucenter.uc_');			// UCenter ��ݿ��ǰ׺

//ͨ�����
define('UC_KEY', 'BVcqhA8EFfZshkq8ZUJvTewMx');				// �� UCenter ��ͨ����Կ, Ҫ�� UCenter ����һ��
define('UC_API', 'http://www.ucenter.com/');	// UCenter �� URL ��ַ, �ڵ���ͷ��ʱ�����˳���
define('UC_CHARSET', 'gbk');				// UCenter ���ַ�
define('UC_IP', '');					// UCenter �� IP, �� UC_CONNECT Ϊ�� mysql ��ʽʱ, ���ҵ�ǰӦ�÷�������������������ʱ, �����ô�ֵ
define('UC_APPID', 2);					// ��ǰӦ�õ� ID

//ucexample_2.php �õ���Ӧ�ó�����ݿ����Ӳ���
$dbhost = 'localhost';			// ��ݿ������
$dbuser = 'root';			// ��ݿ��û���
$dbpw = '';				// ��ݿ�����
$dbname = 'ucenter';			// ��ݿ���
$pconnect = 0;				// ��ݿ�־����� 0=�ر�, 1=��
$tablepre = 'example_';   		// ����ǰ׺, ͬһ��ݿⰲװ�����̳���޸Ĵ˴�
$dbcharset = 'utf8';			// MySQL �ַ�, ��ѡ 'gbk', 'big5', 'utf8', 'latin1', ����Ϊ������̳�ַ��趨

//ͬ����¼ Cookie ����
$cookiedomain = ''; 			// cookie ������
$cookiepath = '/';			// cookie ����·��

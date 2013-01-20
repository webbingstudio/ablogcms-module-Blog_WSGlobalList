a-blog cms module "Blog_WSGlobalList"
====================================

Author: Seiko Kuchida  
mail[at]webbingstudio.com  
http://webbingstudio.com/

Copyright 2012 WebbingStudio

- - - - - - - - - - - - - - - - - - -

概要
------------------------------------

公開状態・管理画面に関係なく、登録されている全てのブログ一覧を表示する、a-blog cms用の非公式モジュールです。  
管理画面にブログ間移動リンクを追加したいときにご利用ください。

http://code1616.net/ablogcms/entry-32.html

※事前にユーザー設定で「どこでもログイン」を有効にしていなければ、リンク先に移動できません。  
※ユーザーを限定しているブログや、非公開のブログも表示します。利用の際はご注意ください。

動作条件
------------------------------------

a-blog cms 1.4.2以上

インストール方法
------------------------------------

1. ファイルを解凍する
2. 「php」フォルダを、a-blog cmsを設置したディレクトリにアップロードする

サンプルコード
------------------------------------

    <!-- BEGIN_MODULE Blog_WSGlobalList -->
    ブログの管理画面を移動する
    <ul>
    <!-- BEGIN blog:loop -->
        <li><a href="http://{domain}/bid/{id}/admin/top/">{name} (   D:{id})</a></li>
    <!-- END blog:loop -->
    </ul>
    <!-- END_MODULE Blog_WSGlobalList -->

更新履歴
------------------------------------

0.01  2012.10.17 GitHubに公開

制作者
------------------------------------

Seiko Kuchida mail[at]webbingstudio.com (0.01)

利用条件
------------------------------------

a-blog cmsのライセンス規定に準じます。
個人・商用ともご自由にお使いください。



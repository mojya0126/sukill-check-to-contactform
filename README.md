開発環境
・macOS Big Sur ver11.1
・MAMPサーバーを使用
・テキストエディタ
　visual studio Code
 
 （作成時のレベル）
 HTML＆CSS　概要を知っている程度。PHP 完全未経験


（実装に費やした時間）
・60時間
（ここをボーダーとしていました。）

・実装中に問題となったこと・工夫したところ

（サーバの立ち上げ）
PHPがブラウザで表示されない
最終的にMAMPを使用することとした。

（PHPの実装）
ブラウザバック後に二重送信に
ならないようにする点と、
ブラウザを書き換えた際に、
すでに入力をしていた箇所を
リセットしないようにすることに時間がかかりました。
確認画面のリンクをフォームに直接入力すると、
確認画面に未入力の状態で飛んでしまうため、
そちらの処理を行うのに苦労しました。

（改善点）
確認画面から修正をする際に、
どうしてもセレクトボックスだけ
選択する前の状態に戻ってしまいますが
時間の制約上、諦めました。　
MVCモデルに出来るだけするために、
controllerにPHPを集約した
かったのですが、うまく動作をしない為、
同じファイル内に混在する形となりました。
次回は、ファイル分けを出来るようにしたいです。
MySQLでデータベースの登録を行おうとしたのですが、
返り値が空でした (行数 0)。のエラーを
改善することが出来ずに時間切れとなりました。
テーブルやカラムの使い方は理解したので、
次回はデータベースも実装したいです。

（どのような動作テストを行ったか）
初めに、全ての入力内容をクリックしない状態で、
エラー構文が出るのかの確認を行いました。
その後、構文の出力を確認できたので、
次に一つの項目でも入力しなければ、
エラーになるのかを確認するために、
全ての場合分けに分けて確認しました。

その後、確認画面に進んだ後に、
修正ボタンを押し前のフォームに戻れるのかを確認しました。

最後に指定したメールアドレスと、
自分のメールアドレスのどちらにも
連絡が行くのかを確認しました。

参考サイト
MacにCakePHP3.Xを入れてみた
https://www.okawauchi.com/mac%E3%81%ABcakephp3-x%E3%82%92%E5%85%A5%E3%82%8C%E3%81%A6%E3%81%BF%E3%81%9F/

最新版のCLTをインストール済にもかかわらず、brewに「CLTをUpdateしろ」って怒られる場合の対処法
https://qiita.com/gesutaka/items/fe34bd5de524a20b2b0a

macOS に Homebrew から phpMyAdmin をインストール
https://tyru.hatenablog.com/entry/2019/06/20/210517

 MySQLをWebに導入
https://www.phpmyadmin.net/downloads/

select要素とは
https://creatorquest.jp/reference/html/element/select/

【GitHub】シンプルなREADME.mdの書き方 
-コピペで使えるテンプレート付き-
https://cpp-learning.com/readme/

★HTML5タグリファレンス
http://www.htmq.com/html5/input_required.shtml

ゼロから始めるPHP講座Vol21　phpMyAdminの基礎と使い方①
https://blog.codecamp.jp/phpmyadmin01?tguid=3C0B1FAC0BDB02607166748D02C00B11

【PHP】try-catch解説
https://qiita.com/Chelsea/items/59436cfda149a6ac6c91

markup version service
https://validator.w3.org/#validate_by_input

PHPでメール送信するための方法を解説【初めてでもわかりやすく】
https://techplay.jp/column/550

初めてのWebアプリケーション・サーバ
https://www.atmarkit.co.jp/fjava/rensai/was05/was05_1.html

いまさら聞けないLinuxの基礎知識 (1/2)
https://www.atmarkit.co.jp/ait/articles/1602/16/news016.html

【GitHub】シンプルなREADME.mdの書き方 -
コピペで使えるテンプレート付き-
https://cpp-learning.com/readme/

SourceTreeの使い方・GitHubとの連携方法
https://ics.media/entry/15195/

今さら聞けない！GitHubの使い方【超初心者向け】
https://techacademy.jp/magazine/6235

【初心者必見！】Visual Studio Codeの使い方を分かりやすく解説！
https://www.sejuku.net/blog/40607

phpの開発環境の設定
https://info.acmatu.com/vscode_php.html

【初心者向け】MacでPHPを使う時の開発環境の作り方【MAMP】
https://web-camp.io/magazine/archives/5661

マークアップ現場サービス
https://validator.w3.org/#validate_by_input

コードなしでGitとGitHubを学びましょう！
https://github.com/mojya0126/sukill-check-to-simpleway

プログラミング系ハマったとこ解決ブログ
https://blog.tanebox.com/archives/9/

Sourcetree でリポジトリのクローンに失敗するときにやってみて
https://blog.gti.jp/post-14377/

Git のインストール 〜Git をMacにインストールしよう〜
https://tracpath.com/bootcamp/git-install-to-mac.html

PHPのバージョンを7.4にアップデートする
https://qiita.com/kuroro_ru/items/046cba8e23d32599ee4a

MAMPのローカル環境からメールを送信する方法を丁寧に解説
https://dezanari.com/mamp-mail/

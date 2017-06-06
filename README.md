## NetBeans PHP Stubs for Japanese

NetBeans PHP 用の日本語のスタブです。ドキュメントは日本語の翻訳を利用し、PHPマニュアルへのリンクのURLはjaに変更しています。

### 使用方法

1. 対応したバージョンのブランチを選択し、ダウンロードする。もしくは `git clone` する。
2. NetBeansをインストールしたディレクトリのなかにある php/phpstubs/phpruntime 内のファイルをバックアップする。
3. phpstubs/phpruntime/ja 内のファイルをコピーし、 php/phpstubs/phpruntime のファイルを上書きする。

もしくは、シンボリックリンクを作成するなどしてください。上書きせずに`ja`ディレクトリをそのまま`php/phpstubs/phpruntime`内にコピーしても使えますが、二重に補完の候補が追加されるので処理が遅くなるかもしれません。

### 注意

- すべてのファイルには対応していませんので、不足するファイルはデフォルトのものを使用してください。
- ファイルを上書きした時に、例外が発生する場合は、構文が未対応のNetBeansのバージョンを使用している可能性があります。その場合は、バックアップしていたデフォルトのファイルに戻してください。
- このスタブを使用した時に起こったエラーについては、NetBeans本体側にはバグ報告しないでください。報告しても何も対応されません。
- NetBeansでエラーが出ないことを確認していますが、他のIDEでの動作の保証はできません。

### NetBeansのバージョン

NetBeans 8.2

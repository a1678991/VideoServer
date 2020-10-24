# VideoServer
## 開発環境
ubuntu server 20.04 LTS

nginx/1.18.0

php-fpm7.4

## 使い方
nginxで指定したフォルダ下にクローンする

```
git clone git@github.com:ue8d/VideoServer.git
```

プロジェクトフォルダ内に移動し、「video」フォルダと「encVideo」フォルダを作成

```
mkdir video encVideo
```

mp4形式の動画は「video」フォルダに、m3u8形式の動画は「encVideo」フォルダに入れることでindex.phpに認識される
# php-sandbox
PHP 8.1.22<br>
PHPUnit 10.3.2<br>
xdebug 3.2.2

## 環境構築
```
make install
```

makeコマンドが実行できない場合は以下を実行
```
docker-compose up --build -d
docker-compose run --rm php composer install
```

## PhpStormでテストカバレッジ実行
①[PHPStormからDockerのPHPコンテナでPHPUnitを実行する方法](https://qiita.com/minato-naka/items/e3eeab7c619aed25cd7b)を参考にphpstormの設定を行う<br>

「Settings」->「PHP」->「CLI Intepreter」->「...」をクリック<br><br>
<img width="485" alt="スクリーンショット 2023-08-28 161851" src="https://github.com/AQ-masatoshi-yamaguchi/php-sandbox/assets/69567949/a75bec6d-d5b4-477c-8860-eacbb1e544ab"><br>

「Settings」->「PHP」->「Test Frameworks」->左上の「＋」->「PHPUnit by Remote Interpreter」をクリック<br><br>

<img width="486" alt="スクリーンショット 2023-08-28 161948" src="https://github.com/AQ-masatoshi-yamaguchi/php-sandbox/assets/69567949/74ef46c3-79f8-45c2-af1f-1bf1869c7a06"><br>

②カバレッジ付きで実行する<br>
![スクリーンショット 2023-08-24 163344](https://github.com/AQ-masatoshi-yamaguchi/php-sandbox/assets/69567949/385a6a27-f7b8-4e76-9493-3ac1de6fa754)

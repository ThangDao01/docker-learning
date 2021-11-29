<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            [
                "url" => "SSI-Research",
                "thumbnail" => "https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/news\/news_1.png",
                "title" => "ti\u1ec1n t\u1eeb c\u00e1c qu\u1ef9 v\u00e0 kh\u1ed1i ngo\u1ea1i tr\u00ean th\u1ecb tr\u01b0\u1eddng ch\u1ee9ng kho\u00e1n s\u1ebd ch\u01b0a th\u1ec3 quay tr\u1edf l\u1ea1i trong ng\u1eafn h\u1ea1n cho \u0111\u1ebfn n\u0103m 2022",
                "category" => "tin-thi-truong",
                "description" => "<p>Theo SSI Research, y\u1ebfu t\u1ed1 s\u1ebd l&agrave; \u0111\u1ed9ng l\u1ef1c cho s\u1ef1 quay tr\u1edf l\u1ea1i c\u1ee7a d&ograve;ng v\u1ed1n ngo\u1ea1i trong n\u0103m 2022 \u0111\u1ebfn t\u1eeb n&ecirc;\u0300n t\u1ea3ng v\u0129 m&ocirc; c\u1ee7a Vi&ecirc;\u0323t Nam v\u1eabn \u0111\u01b0\u01a1\u0323c duy tr&igrave; trong d&agrave;i h\u1ea1n v&agrave; k\u1ef3 v\u1ecdng th\u1ecb tr\u01b0\u1eddng Vi&ecirc;\u0323t Nam \u0111\u01b0\u01a1\u0323c n&acirc;ng h\u1ea1ng trong n\u0103m 2023 &ndash; 2025<\/p>",
                "detail" => "<div _ngcontent-bdm-c4=\"\" class=\"article__content\"><!----><div _ngcontent-bdm-c4=\"\" class=\"article__thumbnail_full_width\"><img _ngcontent-bdm-c4=\"\" src=\"https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/news\/news_1.png\" alt=\" D\u00f2ng ti\u1ec1n t\u1eeb c\u00e1c qu\u1ef9 v\u00e0 kh\u1ed1i ngo\u1ea1i tr\u00ean th\u1ecb tr\u01b0\u1eddng ch\u1ee9ng kho\u00e1n s\u1ebd ch\u01b0a th\u1ec3 quay tr\u1edf l\u1ea1i trong ng\u1eafn h\u1ea1n cho \u0111\u1ebfn n\u0103m 2022\"><\/div><!----><!----><!----><p _ngcontent-bdm-c4=\"\"><p>&nbsp;<\/p> <p>Trong b\u00e1o c\u00e1o chi\u1ebfn l\u01b0\u1ee3c th\u1ecb tr\u01b0\u1eddng m\u1edbi \u0111\u00e2y, CTCK SSI cho bi\u1ebft d\u00f2ng v\u1ed1n ETF trong th\u00e1ng 9 tr\u00ean th\u1ecb tr\u01b0\u1eddng ch\u1ee9ng kho\u00e1n Vi\u1ec7t Nam \u0111\u00e3 b\u1ecb r\u00fat r\u00f2ng g\u00e2\u0300n 2.300 t\u1ef7 \u0111\u00f4\u0300ng \u2013 m\u1ee9c gi\u1ea3m m\u1ea1nh nh\u1ea5t trong v\u00f2ng 2 n\u0103m qua. \u0110a\u0301ng ch\u00fa \u00fd l\u00e0 t\u1ea5t c\u1ea3 5 qu\u1ef9 ETF l\u1edbn nh\u1ea5t tr\u00ean th\u1ecb tr\u01b0\u1eddng \u0111\u00ea\u0300u r\u01a1i v\u00e0o tr\u1ea1ng th\u00e1i b\u1ecb r\u00fat r\u00f2ng, trong \u0111o\u0301, l\u1ef1c r\u00fat m\u1ea1nh di\u1ec5n ra \u1edf c\u1ea3 nh\u00f3m qu\u1ef9 ngo\u1ea1i khi FTSE ETF r\u00fat r\u00f2ng 1.275 t\u1ef7 \u0111\u1ed3ng, Fubon ETF r\u00fat r\u00f2ng 153 t\u1ef7 \u0111\u1ed3ng v\u00e0 VanEck ETF gi\u1ea3m r\u00f2ng 22 t\u1ef7 \u0111\u1ed3ng. T\u1ea1i nh\u00f3m qu\u1ef9 n\u1ed9i, VNDiamond ETF ghi nh\u1eadn \u00e1p l\u1ef1c r\u00fat r\u00f2ng 990 t\u1ef7 \u0111\u1ed3ng trong khi VFMVN30 ETF c\u0169ng b\u1ecb r\u00fat r\u00f2ng 19 t\u1ef7 \u0111\u1ed3ng.<\/p> <p>&nbsp;<\/p> <p>M\u0103t kh\u00e1c, m\u1ed9t s\u1ed1 qu\u1ef9 nho\u0309 h\u01a1n nh\u01b0 VNFIN Lead, MiraeAsset VN30 v\u00e0 Asian CUBS ghi nh\u1eadn d\u00f2ng v\u1ed1n t\u00edch c\u1ef1c h\u01a1n, nh\u01b0ng gi\u00e1 tr\u1ecb kh\u00f4ng \u0111a\u0301ng k\u00ea\u0309 v\u1edbi t\u1ed5ng c\u1ed9ng gi\u00e1 tr\u1ecb mua r\u00f2ng kho\u1ea3ng 200 t\u1ef7 \u0111\u00f4\u0300ng. T\u00ednh chung cho qu\u00fd 3\/2021, d\u00f2ng v\u1ed1n ETF v\u1eabn duy tr\u00ec mua r\u00f2ng kho\u1ea3ng 300 t\u1ef7 \u0111\u00f4\u0300ng, tuy nhi\u00ean th\u1ea5p h\u01a1n nhi\u00ea\u0300u so v\u1edbi 2 qu\u00fd tr\u01b0\u1edbc \u0111o\u0301 l\u00e0 2.700 t\u1ef7 \u0111\u1ed3ng trong qu\u00fd 1 v\u00e0 8.200 t\u1ef7 \u0111\u00f4\u0300ng trong qu\u00fd 2. T\u01b0\u01a1ng t\u1ef1 di\u1ec5n bi\u1ebfn t\u1eeb c\u00e1c qu\u1ef9 ETF, c\u00e1c qu\u1ef9 ch\u1ee7 \u0111\u1ed9ng ti\u1ebfp tu\u0323c r\u00fat r\u00f2ng trong th\u00e1ng 9 v\u1edbi gi\u00e1 tr\u1ecb 700 t\u1ef7 \u0111\u00f4\u0300ng. Nh\u01b0 v\u1eady, trong 9 th\u00e1ng \u0111\u00e2\u0300u n\u0103m, c\u00e1c qu\u1ef9 ch\u1ee7 \u0111\u1ed9ng \u0111a\u0303 r\u00fat ra kho\u1ea3ng 6.300 t\u1ef7 \u0111\u00f4\u0300ng \u2013 l\u1edbn th\u1ee9 3 trong khu v\u1ef1c ch\u1ec9 sau hai th\u1ecb tr\u01b0\u1eddng l\u00e0 \u1ea4n \u0110\u1ed9 v\u00e0 Th\u00e1i Lan.<\/p> <p>&nbsp;<\/p> <p>Kh\u1ed1i ngo\u1ea1i ti\u1ebfp tu\u0323c l\u00e0 \u0111i\u1ec3m tr\u1eeb khi b\u00e1n r\u00f2ng v\u1edbi t\u1ed5ng gi\u00e1 tr\u1ecb l\u00e0 8.368 t\u1ef7 \u0111\u00f4\u0300ng \u2013 l\u00e0 th\u00e1ng b\u00e1n r\u00f2ng cao th\u1ee9 3 trong n\u0103m 2021. L\u0169y k\u1ebf 9 th\u00e1ng \u0111\u00e2\u0300u n\u0103m, gi\u00e1 tr\u1ecb b\u00e1n r\u00f2ng c\u1ee7a kh\u1ed1i ngo\u1ea1i l\u00ean t\u1edbi h\u01a1n 40.000 t\u1ef7 \u0111\u00f4\u0300ng, cao h\u01a1n nhi\u00ea\u0300u so v\u1edbi m\u1ee9c b\u00e1n r\u00f2ng g\u00e2\u0300n 6.000 t\u1ef7 \u0111\u1ed3ng c\u00f9ng k\u1ef3 n\u0103m ngo\u00e1i. Theo SSI Research, d\u00f2ng ti\u1ec1n \u0111\u1ea7u t\u01b0 c\u00f3 xu h\u01b0\u1edbng ti\u00eau c\u1ef1c trong th\u1eddi gian qua khi s\u01b0\u0301c h\u00e2\u0301p d\u1eabn cu\u0309a th\u1ecb tr\u01b0\u1eddng ch\u01b0\u0301ng kho\u00e1n Vi\u00ea\u0323t Nam gia\u0309m s\u00fat \u0111\u1ebfn t\u1eeb nhi\u1ec1u l\u00fd do kh\u00e1ch quan v\u00e0 chu\u0309 quan. Theo \u0111\u00f3, t\u00e2m l\u00fd nh\u00e0 \u0111\u00e2\u0300u t\u01b0 b\u1ecb \u1ea3nh h\u01b0\u1edfng nghi\u00eam tr\u1ecdng trong b\u1ed1i c\u1ea3nh d\u1ecbch b\u1ec7nh \u1ea3nh h\u01b0\u1edfng nghi\u00eam tr\u1ecdng \u0111\u1ebfn n\u1ec1n kinh t\u1ebf.<\/p> <p>&nbsp;<\/p> <p>Th\u00eam v\u00e0o \u0111o\u0301, d\u00f2ng ti\u00ea\u0300n hi\u00ea\u0323n t\u1ea1i \u0111ang chuy\u00ea\u0309n h\u01b0\u1edbng sang c\u00e1c qu\u1ed1c gia c\u00f3 th\u1ebf m\u1ea1nh xu\u1ea5t kh\u1ea9u c\u00e1c m\u1eb7t h\u00e0ng nguy\u00ean li\u00ea\u0323u th\u00f4 nh\u01b0 d\u00e2\u0300u th\u00f4, than \u0111a\u0301,\u2026 do v\u1eady Vi\u00ea\u0323t Nam kh\u00f4ng c\u00f2n l\u00e0 \u0111i\u00ea\u0309m \u0111\u1ebfn h\u1ea5p d\u1eabn c\u1ee7a kh\u1ed1i ngo\u1ea1i trong giai \u0111o\u1ea1n n\u00e0y. Nh\u1eadn \u0111\u1ecbnh v\u1ec1 th\u1ecb tr\u01b0\u1eddng trong th\u00e1ng 10, SSI Research cho bi\u1ebft th\u1ecb tr\u01b0\u1eddng s\u1ebd ch\u00e0o \u0111o\u0301n th\u00eam m\u1ed9t qu\u1ef9 ETF n\u1ed9i l\u00e0 IPAAM VN100 ETF (M\u00e3 ch\u1ee9ng kho\u00e1n: FUEIP100) ch\u00ednh th\u1ee9c ni\u00eam y\u1ebft t\u1eeb ng\u00e0y 12\/10\/2021. Quy m\u00f4 c\u1ee7a qu\u1ef9 c\u00f2n kh\u00e1 nho\u0309 v\u1edbi gi\u00e1 tr\u1ecb IPO 52 t\u1ef7 \u0111\u00f4\u0300ng, do \u0111\u00f3 m\u1ee9c t\u00e1c \u0111\u1ed9ng l\u00ean th\u1ecb tr\u01b0\u1eddng l\u00e0 kh\u00f4ng nhi\u00ea\u0300u.<\/p> <p>&nbsp;<\/p> <p><b>Nh\u00ecn chung, m\u1eb7c d\u00f9 ho\u1ea1t \u0111\u1ed9ng s\u1ea3n xu\u1ea5t \u0111\u01b0\u01a1\u0323c k\u1ef3 v\u1ecdng s\u1ebd h\u00f4\u0300i phu\u0323c trong th\u00e1ng 10 khi Ch\u00ednh ph\u1ee7 \u0111a\u0303 v\u00e0 \u0111ang t\u1eebng b\u01b0\u1edbc m\u1edf c\u1eeda l\u1ea1i n\u00ea\u0300n kinh t\u1ebf, SSI Research \u0111a\u0301nh gi\u00e1 d\u00f2ng ti\u00ea\u0300n \u0111\u00e2\u0300u t\u01b0 v\u1eabn ch\u01b0a th\u00ea\u0309 quay tr\u1edf l\u1ea1i trong ng\u1eafn h\u1ea1n<\/b>. Y\u1ebfu t\u1ed1 s\u1ebd l\u00e0 \u0111\u1ed9ng l\u1ef1c cho s\u1ef1 quay tr\u1edf l\u1ea1i c\u1ee7a d\u00f2ng v\u1ed1n ngo\u1ea1i trong n\u0103m 2022 \u0111\u1ebfn t\u1eeb n\u00ea\u0300n t\u1ea3ng v\u0129 m\u00f4 c\u1ee7a Vi\u00ea\u0323t Nam v\u1eabn \u0111\u01b0\u01a1\u0323c duy tr\u00ec trong d\u00e0i h\u1ea1n v\u00e0 k\u1ef3 v\u1ecdng th\u1ecb tr\u01b0\u1eddng Vi\u00ea\u0323t Nam \u0111\u01b0\u01a1\u0323c n\u00e2ng h\u1ea1ng trong n\u0103m 2023 \u2013 2025.<\/p> <p>&nbsp;<\/p> <p>Ngu\u1ed3n:&nbsp;<a href=\"https:\/\/cafef.vn\/ssi-research-dong-tien-tu-cac-quy-va-khoi-ngoai-tren-thi-truong-chung-khoan-se-chua-the-quay-tro-lai-trong-ngan-han-cho-den-nam-2022-20211007093436855.chn\">Cafef<\/a><\/p> <p>&nbsp;<\/p> <\/p><\/div>",
                "source" => "Cafef",
                "created_at" => "2021-11-28 07:38:38",
                "updated_at" => "2021-11-28 07:38:38"
            ], [
                "url" => "KBSV",
                "thumbnail" => "https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/news\/newsvn.jpg",
                "title" => "KBSV h\u1ea1 d\u1ef1 b\u00e1o VN-Index cu\u1ed1i n\u0103m 2021 t\u1eeb 1.480 \u0111i\u1ec3m xu\u1ed1ng 1.400 \u0111i\u1ec3m, cho r\u1eb1ng nh\u1ecbp t\u0103ng v\u01b0\u1ee3t \u0111\u1ec9nh c\u1ee7a c\u1ed5 phi\u1ebfu l\u00e0 c\u01a1 h\u1ed9i \u0111\u1ec3 b\u00e1n gi\u1ea3m t\u1ef7 tr\u1ecdng",
                "category" => "tin-thi-truong",
                "description" => "<p>KBSV \u0111&aacute;nh gi&aacute;, c\u1ed5 phi\u1ebfu v\u1ed1n ho&aacute; l\u1edbn ti\u1ebfp t\u1ee5c n&ecirc;n \u0111\u01b0\u1ee3c \u01b0u ti&ecirc;n khi l&agrave; nh&oacute;m c&oacute; kh\u1ea3 n\u0103ng ch\u1ed1ng ch\u1ecbu t\u1ed1t v\u1edbi c&aacute;c t&aacute;c \u0111\u1ed9ng x\u1ea5u t\u1eeb d\u1ecbch COVID-19, \u0111\u1ed3ng th\u1eddi c\u0169ng c&oacute; s\u1ee9c b\u1eadt t\u1ed1t nh\u1ea5t khi n\u1ec1n kinh t\u1ebf ho\u1ea1t \u0111\u1ed9ng \u1edf tr\u1ea1ng th&aacute;i &ldquo;b&igrave;nh th\u01b0\u1eddng m\u1edbi&rdquo;.<\/p>",
                "detail" => "<div class=\"article__content\"> <div class=\"article__thumbnail_full_width\"><img alt=\"KBSV h\u1ea1 d\u1ef1 b\u00e1o VN-Index cu\u1ed1i n\u0103m 2021 t\u1eeb 1.480 \u0111i\u1ec3m xu\u1ed1ng 1.400 \u0111i\u1ec3m, cho r\u1eb1ng nh\u1ecbp t\u0103ng v\u01b0\u1ee3t \u0111\u1ec9nh c\u1ee7a c\u1ed5 phi\u1ebfu l\u00e0 c\u01a1 h\u1ed9i \u0111\u1ec3 b\u00e1n gi\u1ea3m t\u1ef7 tr\u1ecdng\" src=\"https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/news\/newsvn.jpg\" \/><\/div> <p>&nbsp;<\/p> <p>&nbsp;<\/p> <p>Trong b&aacute;o c&aacute;o tri\u1ec3n v\u1ecdng th\u1ecb tr\u01b0\u1eddng m\u1edbi \u0111&acirc;y,&nbsp;Ch\u1ee9ng kho&aacute;n KB Vi\u1ec7t Nam (KBSV) cho r\u1eb1ng d\u01b0 \u0111\u1ecba t\u0103ng c\u1ee7a th\u1ecb tr\u01b0\u1eddng trong qu&yacute; 4\/2021 \u0111&atilde; b\u1ecb thu h\u1eb9p \u0111&aacute;ng k\u1ec3 d\u01b0\u1edbi t&aacute;c \u0111\u1ed9ng c\u1ee7a \u0111\u1ee3t d\u1ecbch COVID-19 c&ugrave;ng v\u1edbi c&aacute;c quy \u0111\u1ecbnh c&aacute;ch ly x&atilde; h\u1ed9i \u0111\u01b0\u1ee3c &aacute;p d\u1ee5ng t\u1ea1i c&aacute;c th&agrave;nh ph\u1ed1 l\u1edbn.&nbsp;<\/p> <p>&nbsp;<\/p> <p>Theo KBSV,&nbsp;nh\u1ecbp \u0111i\u1ec1u ch\u1ec9nh s&acirc;u c\u1ee7a th\u1ecb tr\u01b0\u1eddng trong th&aacute;ng 7 \u0111&atilde; ph\u1ea7n n&agrave;o ph\u1ea3n &aacute;nh c&aacute;c t&aacute;c \u0111\u1ed9ng ti&ecirc;u c\u1ef1c t\u1eeb \u0111\u1ee3t b&ugrave;ng ph&aacute;t d\u1ecbch v\u1eeba qua, tr\u01b0\u1edbc khi th\u1ecb tr\u01b0\u1eddng b\u01b0\u1edbc v&agrave;o nh\u1ecbp \u0111i ngang, h\u1ed3i ph\u1ee5c nh\u1eb9 trong th&aacute;ng 8 v&agrave; th&aacute;ng 9. \u0110&agrave; ph\u1ee5c h\u1ed3i n&agrave;y \u0111\u01b0\u1ee3c cho s\u1ebd ti\u1ebfp t\u1ee5c l&agrave; xu h\u01b0\u1edbng ch\u1ee7 \u0111\u1ea1o trong qu&yacute; 4, song kh&ocirc;ng qu&aacute; m\u1ea1nh v&agrave; mang t&iacute;nh ph&acirc;n ho&aacute; khi m&agrave; c&aacute;c quy \u0111\u1ecbnh c&aacute;ch ly x&atilde; h\u1ed9i v\u1eabn \u0111\u01b0\u1ee3c &aacute;p d\u1ee5ng \u1edf m\u1ed9t m\u1ee9c \u0111\u1ed9 nh\u1ea5t \u0111\u1ecbnh, \u0111i k&egrave;m r\u1ee7i ro b&ugrave;ng ph&aacute;t d\u1ecbch b\u1ec7nh, tri\u1ec3n v\u1ecdng k\u1ebft qu\u1ea3 kinh doanh c&aacute;c doanh nghi\u1ec7p suy y\u1ebfu trong qu&yacute; 3 v&agrave; ch\u01b0a th\u1ec3 b\u1ee9t ph&aacute; ngay trong qu&yacute; 4.<\/p> <p>&nbsp;<\/p> <p>KBSV h\u1ea1 d\u1ef1 ph&oacute;ng t\u0103ng tr\u01b0\u1edfng EPS tr\u01b0\u1ee3t 12 th&aacute;ng b&igrave;nh qu&acirc;n to&agrave;n th\u1ecb tr\u01b0\u1eddng n\u0103m 2021 xu\u1ed1ng 25% (t\u1eeb m\u1ee9c d\u1ef1 ph&oacute;ng 31% \u0111\u01b0a ra v&agrave;o cu\u1ed1i qu&yacute; 2). Theo \u0111&oacute;, P\/E n\u0103m 2021 c\u1ee7a ch\u1ec9 s\u1ed1 VN-Index \u1edf m\u1ee9c 16,8 l\u1ea7n. \u0110&acirc;y kh&ocirc;ng ph\u1ea3i m\u1ee9c P\/E th\u1ea5p, tuy nhi&ecirc;n v\u1eabn t\u01b0\u01a1ng \u0111\u1ed1i h\u1ea5p d\u1eabn trong b\u1ed1i c\u1ea3nh k\u1ef3 v\u1ecdng l\u1ee3i nhu\u1eadn doanh nghi\u1ec7p ni&ecirc;m y\u1ebft s\u1ebd t\u0103ng tr\u01b0\u1edfng m\u1ea1nh m\u1ebd tr\u1edf l\u1ea1i sau khi d\u1ecbch b\u1ec7nh qua \u0111i v&agrave; m\u1eb7t b\u1eb1ng l&atilde;i su\u1ea5t duy tr&igrave; \u1edf m\u1ee9c th\u1ea5p. X&eacute;t theo t\u01b0\u01a1ng quan P\/B v\u1edbi ROE, th\u1ecb tr\u01b0\u1eddng ch\u1ee9ng kho&aacute;n Vi\u1ec7t Nam c\u0169ng \u0111ang \u1edf v&ugrave;ng gi&aacute; h\u1ea5p d\u1eabn h\u01a1n t\u01b0\u01a1ng \u0111\u1ed1i so v\u1edbi h\u1ea7u h\u1ebft c&aacute;c th\u1ecb tr\u01b0\u1eddng Ch&acirc;u &Aacute; kh&aacute;c.<\/p> <p>&nbsp;<\/p> <p>V\u1edbi c\u01a1 s\u1edf d\u1ef1 b&aacute;o c&aacute;c th&agrave;nh ph\u1ed1 l\u1edbn nh\u01b0 H&agrave; N\u1ed9i v&agrave; TP H\u1ed3 Ch&iacute; Minh s\u1ebd \u0111\u1ea1t m\u1ee9c mi\u1ec5n d\u1ecbch c\u1ed9ng \u0111\u1ed3ng (70-80% d&acirc;n s\u1ed1 ti&ecirc;m \u0111\u1ee7 2 m\u0169i) v&agrave;o n\u1eeda sau qu&yacute; 4, c&ugrave;ng v\u1edbi vi\u1ec7c l\u1ea1m ph&aacute;t trong t\u1ea7m ki\u1ec3m so&aacute;t, ch&iacute;nh s&aacute;ch t&agrave;i kho&aacute; v&agrave; ti\u1ec1n t\u1ec7 mang t&iacute;nh h\u1ed7 tr\u1ee3, l&atilde;i su\u1ea5t duy tr&igrave; \u1edf m\u1ee9c th\u1ea5p, t\u1ef7 gi&aacute; di\u1ec5n bi\u1ebfn \u1ed5n \u0111\u1ecbnh, \u0111\u1ea7u t\u01b0 c&ocirc;ng \u0111\u01b0\u1ee3c \u0111\u1ea9y m\u1ea1nh, n\u1ec1n kinh t\u1ebf v&agrave; kh\u1ed1i c&aacute;c doanh nghi\u1ec7p d&ugrave; b\u1ecb \u1ea3nh h\u01b0\u1edfng n\u1eb7ng n\u1ec1 nh\u01b0ng s\u1ebd quay tr\u1edf l\u1ea1i chu k\u1ef3 t\u0103ng tr\u01b0\u1edfng v&agrave;o \u0111\u1ea7u n\u0103m 2022, KBSV k\u1ef3 v\u1ecdng m\u1ee9c P\/E 2021 h\u1ee3p l&yacute; quanh 17,5 l\u1ea7n.<strong>&nbsp;V&ugrave;ng gi&aacute; m\u1ee5c ti&ecirc;u c\u1ee7a ch\u1ec9 s\u1ed1 VN-Index cu\u1ed1i n\u0103m nay l&agrave; 1.400 \u0111i\u1ec3m - th\u1ea5p h\u01a1n d\u1ef1 b&aacute;o m\u1ee9c 1.480 \u0111i\u1ec3m \u0111\u01b0\u1ee3c \u0111\u01b0a ra t\u1ea1i b&aacute;o c&aacute;o tr\u01b0\u1edbc \u0111&oacute;.<\/strong><\/p> <p>&nbsp;<\/p> <p>&nbsp;<\/p> <p><strong>C&aacute;c nh\u1ecbp \u0111i\u1ec1u ch\u1ec9nh \u0111&aacute;ng k\u1ec3 l&agrave; \u0111i\u1ec1u ki\u1ec7n \u0111\u1ec3&nbsp;t&iacute;ch lu\u1ef9 c\u1ed5 phi\u1ebfu<\/strong><\/p> <p>&nbsp;<\/p> <p>Chi\u1ebfn l\u01b0\u1ee3c giao d\u1ecbch \u0111\u01b0\u1ee3c khuy\u1ebfn ngh\u1ecb l&agrave; ch\u1ee7 \u0111\u1ed9ng mua th\u1ea5p, b&aacute;n cao, b&aacute;m theo xu h\u01b0\u1edbng trung h\u1ea1n c\u1ee7a th\u1ecb tr\u01b0\u1eddng \u0111\u1ec3 mang l\u1ea1i hi\u1ec7u qu\u1ea3 \u0111\u1ea7u t\u01b0 t\u1ed1t trong qu&yacute; 4. V\u1edbi vi\u1ec7c \u0111i\u1ec1u ki\u1ec7n th\u1ecb tr\u01b0\u1eddng ch\u01b0a th\u1ec3 \u0111\u01b0\u1ee3c c\u1ea3i thi\u1ec7n \u0111&aacute;ng k\u1ec3 v&agrave; c&aacute;c r\u1ee7i ro v\u1eabn hi\u1ec7n h\u1eefu, c&aacute;c nh\u1ecbp t\u0103ng v\u01b0\u1ee3t \u0111\u1ec9nh c\u1ee7a c\u1ed5 phi\u1ebfu l&agrave; c\u01a1 h\u1ed9i \u0111\u1ec3 nh&agrave; \u0111\u1ea7u t\u01b0 b&aacute;n gi\u1ea3m t\u1ef7 tr\u1ecdng, hi\u1ec7n th\u1ef1c ho&aacute; l\u1ee3i nhu\u1eadn \u0111\u1ed1i v\u1edbi c&aacute;c v\u1ecb th\u1ebf ng\u1eafn h\u1ea1n.&nbsp; Ng\u01b0\u1ee3c l\u1ea1i, nh&agrave; \u0111\u1ea7u t\u01b0 c&oacute; th\u1ec3 t&iacute;ch lu\u1ef9 c\u1ed5 phi\u1ebfu n\u1ebfu xu\u1ea5t hi\u1ec7n c&aacute;c nh\u1ecbp \u0111i\u1ec1u ch\u1ec9nh \u0111&aacute;ng k\u1ec3 khi xu h\u01b0\u1edbng ch\u1ee7 \u0111\u1ea1o c\u1ee7a th\u1ecb tr\u01b0\u1eddng trong qu&yacute; 4 l&agrave; h\u1ed3i ph\u1ee5c nh\u1eb9. KBSV \u0111&aacute;nh gi&aacute;, c\u1ed5 phi\u1ebfu v\u1ed1n ho&aacute; l\u1edbn ti\u1ebfp t\u1ee5c n&ecirc;n \u0111\u01b0\u1ee3c \u01b0u ti&ecirc;n khi l&agrave; nh&oacute;m c&oacute; kh\u1ea3 n\u0103ng ch\u1ed1ng ch\u1ecbu t\u1ed1t v\u1edbi c&aacute;c t&aacute;c \u0111\u1ed9ng x\u1ea5u t\u1eeb d\u1ecbch COVID-19, \u0111\u1ed3ng th\u1eddi c\u0169ng c&oacute; s\u1ee9c b\u1eadt t\u1ed1t nh\u1ea5t khi n\u1ec1n kinh t\u1ebf ho\u1ea1t \u0111\u1ed9ng \u1edf tr\u1ea1ng th&aacute;i &ldquo;b&igrave;nh th\u01b0\u1eddng m\u1edbi&rdquo;.<\/p> <p>&nbsp;<\/p> <p>KBSV \u0111&aacute;nh gi&aacute; tri\u1ec3n v\u1ecdng t&iacute;ch c\u1ef1c trong qu&yacute; 4\/2021 \u0111\u1ed1i v\u1edbi tri\u1ec3n v\u1ecdng c&aacute;c ng&agrave;nh&nbsp;<strong>b\u1ea5t \u0111\u1ed9ng s\u1ea3n, b\u1ea5t \u0111\u1ed9ng s\u1ea3n khu c&ocirc;ng nghi\u1ec7p, \u0111i\u1ec7n, c\u1ea3ng bi\u1ec3n, c&ocirc;ng ngh\u1ec7 th&ocirc;ng tin, ng&acirc;n h&agrave;ng, thu\u1ef7 s\u1ea3n v&agrave; d\u1ea7u kh&iacute;.<\/strong>&nbsp;KBSV cho r\u1eb1ng, y\u1ebfu t\u1ed1 thu\u1eadn l\u1ee3i s\u1ebd t&aacute;c \u0111\u1ed9ng m\u1ea1nh t\u1edbi th\u1ecb tr\u01b0\u1eddng trong qu&yacute; 4 \u0111\u1ebfn t\u1eeb&nbsp;vi\u1ec7c l&agrave;n s&oacute;ng COVID-19 l\u1ea7n th\u1ee9 4 \u0111\u01b0\u1ee3c ki\u1ec3m so&aacute;t v&agrave; l\u1ed9 tr&igrave;nh ti&ecirc;m vaccine \u0111\u01b0\u1ee3c \u0111\u1ea9y nhanh v&agrave; c&aacute;c doanh nghi\u1ec7p quay tr\u1edf l\u1ea1i ho\u1ea1t \u0111\u1ed9ng trong tr\u1ea1ng th&aacute;i &ldquo;b&igrave;nh th\u01b0\u1eddng m\u1edbi&rdquo;. B&ecirc;n c\u1ea1nh \u0111&oacute;, \u0111\u1ea7u k&eacute;o t\u1edbi t\u1eeb \u0111\u1ea7u t\u01b0 c&ocirc;ng v&agrave;&nbsp;m\u1eb7t b\u1eb1ng l&atilde;i su\u1ea5t duy tr&igrave; m\u1ee9c th\u1ea5p gi&uacute;p d&ograve;ng ti\u1ec1n m\u1edbi d\u1ed3i d&agrave;o \u0111\u1ed5 v&agrave;o th\u1ecb tr\u01b0\u1eddng s\u1ebd c\u1ee7ng c\u1ed1 th&ecirc;m \u0111&agrave; t\u0103ng cho ch\u1ec9 s\u1ed1.<\/p> <p>&nbsp;<\/p> <p>Tuy nhi&ecirc;n, nh&agrave; \u0111\u1ea7u t\u01b0 c\u0169ng c\u1ea7n x&eacute;t t\u1edbi c&aacute;c y\u1ebfu t\u1ed1 r\u1ee7i ro&nbsp;khi FED \u0111\u1ea9y nhanh t\u1ed1c \u0111\u1ed9 t\u0103ng l&atilde;i su\u1ea5t, gi\u1ea3m ch\u01b0\u01a1ng tr&igrave;nh mua v&agrave;o t&agrave;i s\u1ea3n, l\u1ee3i su\u1ea5t tr&aacute;i phi\u1ebfu ch&iacute;nh ph\u1ee7 t\u0103ng;&nbsp;r\u1ee7i ro t&aacute;i b&ugrave;ng ph&aacute;t d\u1ecbch COVID-19 trong n\u01b0\u1edbc v&agrave; tr&ecirc;n th\u1ebf gi\u1edbi; r\u1ee7i ro l\u1ea1m ph&aacute;t v&agrave; l&atilde;i su\u1ea5t trong n\u01b0\u1edbc t\u0103ng v&agrave; c&aacute;c kho\u1ea3n n\u1ee3 doanh nghi\u1ec7p t\u1ea1i Trung Qu\u1ed1c.<\/p> <p>&nbsp;<\/p> <p>Ngu\u1ed3n:&nbsp;<a href=\"https:\/\/cafef.vn\/kbsv-ha-du-bao-vn-index-cuoi-nam-2021-tu-1480-diem-xuong-1400-diem-cho-rang-nhip-tang-vuot-dinh-cua-co-phieu-la-co-hoi-de-ban-giam-ty-trong-20211005223438441.chn\">Cafef<\/a><\/p> <p>&nbsp;<\/p> <\/div>",
                "source" => "Cafef",
                "created_at" => "2021-11-28 07:38:38",
                "updated_at" => "2021-11-28 07:38:38"
            ], [
                "url" => "ETF-KIM-GROWTH",
                "thumbnail" => "https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/Product\/dreamstime_xxl_62654811%20-%20Copy.jpg",
                "title" => "ETF KIM GROWTH VN30: Th\u00f4ng b\u00e1o v\u1ec1 vi\u1ec7c l\u1ea5y \u00fd ki\u1ebfn b\u1eb1ng v\u0103n b\u1ea3n \u0111\u1ed1i v\u1edbi c\u00e1c Nh\u00e0 \u0110\u1ea7u T\u01b0 \u0111\u0103ng k\u00fd v\u00e0 th\u1ef1c hi\u1ec7n g\u00f3p v\u1ed1n v\u00e0o Qu\u1ef9 ETF KIM GROWTH VN30 trong giai \u0111o\u1ea1n ch\u00e0o b\u00e1n ch\u1ee9ng ch\u1ec9 qu\u1ef9 l\u1ea7n \u0111\u1ea7u ra c\u00f4ng ch\u00fang",
                "category" => "tin-cong-ty",
                "description" => "<p>ETF KIM GROWTH VN30: Th&ocirc;ng b&aacute;o v\u1ec1 vi\u1ec7c l\u1ea5y &yacute; ki\u1ebfn b\u1eb1ng v\u0103n b\u1ea3n \u0111\u1ed1i v\u1edbi c&aacute;c Nh&agrave; \u0110\u1ea7u T\u01b0 \u0111\u0103ng k&yacute; v&agrave; th\u1ef1c hi\u1ec7n g&oacute;p v\u1ed1n v&agrave;o Qu\u1ef9 ETF KIM GROWTH VN30 trong giai \u0111o\u1ea1n ch&agrave;o b&aacute;n ch\u1ee9ng ch\u1ec9 qu\u1ef9 l\u1ea7n \u0111\u1ea7u ra c&ocirc;ng ch&uacute;ng<\/p>",
                "detail" => "<div _ngcontent-bdm-c4=\"\" class=\"article__content\"><!----><div _ngcontent-bdm-c4=\"\" class=\"article__thumbnail_full_width\"><img _ngcontent-bdm-c4=\"\" src=\"https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/Product\/dreamstime_xxl_62654811%20-%20Copy.jpg\" alt=\"ETF KIM GROWTH VN30: Th\u00f4ng b\u00e1o v\u1ec1 vi\u1ec7c l\u1ea5y \u00fd ki\u1ebfn b\u1eb1ng v\u0103n b\u1ea3n \u0111\u1ed1i v\u1edbi c\u00e1c Nh\u00e0 \u0110\u1ea7u T\u01b0 \u0111\u0103ng k\u00fd v\u00e0 th\u1ef1c hi\u1ec7n g\u00f3p v\u1ed1n v\u00e0o Qu\u1ef9 ETF KIM GROWTH VN30 trong giai \u0111o\u1ea1n ch\u00e0o b\u00e1n ch\u1ee9ng ch\u1ec9 qu\u1ef9 l\u1ea7n \u0111\u1ea7u ra c\u00f4ng ch\u00fang\"><\/div><!----><!----><!----><p _ngcontent-bdm-c4=\"\"><p>&nbsp;<\/p> <p>\u0110\u1ec3 ti\u1ebft ki\u1ec7m th\u1eddi gian v\u00e0 chi ph\u00ed, C\u00f4ng Ty d\u1ef1 ki\u1ebfn \u0110\u1ea1i h\u1ed9i Nh\u00e0 \u0110\u1ea7u T\u01b0 l\u1ea7n th\u1ee9 nh\u1ea5t s\u1ebd kh\u00f4ng t\u1ed5 ch\u1ee9c tr\u1ef1c ti\u1ebfp m\u00e0 s\u1ebd ti\u1ebfn h\u00e0nh l\u1ea5y \u00fd ki\u1ebfn Nh\u00e0 \u0110\u1ea7u T\u01b0 b\u1eb1ng v\u0103n b\u1ea3n trong giai \u0111o\u1ea1n ch\u00e0o b\u00e1n ch\u1ee9ng ch\u1ec9 qu\u1ef9 l\u1ea7n \u0111\u1ea7u ra c\u00f4ng ch\u00fang. N\u1ed9i dung xin \u00fd ki\u1ebfn \u0111\u01b0\u1ee3c n\u00eau t\u1ea1i Phi\u1ebfu L\u1ea5y \u00dd Ki\u1ebfn Nh\u00e0 \u0110\u1ea7u T\u01b0 (\u201cPhi\u1ebfu L\u1ea5y \u00dd Ki\u1ebfn\u201d) \u0111\u00ednh k\u00e8m Th\u01b0 m\u1eddi n\u00e0y.<\/p> <p>&nbsp;<\/p> <p>Nh\u00e0 \u0110\u1ea7u T\u01b0 \u0111\u00e3 \u0111\u0103ng k\u00fd mua v\u00e0 th\u1ef1c hi\u1ec7n g\u00f3p v\u1ed1n th\u00e0nh c\u00f4ng trong giai \u0111o\u1ea1n ch\u00e0o b\u00e1n ch\u1ee9ng ch\u1ec9 qu\u1ef9 c\u1ee7a Qu\u1ef9 ETF KIM Growth VN30 l\u1ea7n \u0111\u1ea7u ra c\u00f4ng ch\u00fang c\u00f3 quy\u1ec1n cho \u00fd ki\u1ebfn v\u1ec1 nh\u1eefng v\u1ea5n \u0111\u1ec1 tr\u00ean \u0111\u00e2y. T\u1edd tr\u00ecnh v\u00e0 c\u00e1c t\u00e0i li\u1ec7u li\u00ean quan \u0111\u1ebfn n\u1ed9i dung xin \u00fd ki\u1ebfn Nh\u00e0 \u0110\u1ea7u T\u01b0 \u0111\u01b0\u1ee3c \u0111\u0103ng t\u1ea3i tr\u00ean website c\u1ee7a KIM theo \u0111\u1ecba ch\u1ec9: http:\/\/koreainvestment.com.vn\/vn.<\/p> <p>&nbsp;<\/p> <p>Th\u1eddi h\u1ea1n nh\u1eadn l\u1ea1i Phi\u1ebfu L\u1ea5y \u00dd Ki\u1ebfn l\u00e0 tr\u01b0\u1edbc <strong>17:00 ng\u00e0y 05\/11\/2021 <\/strong>l\u00e0 ng\u00e0y k\u1ebft th\u00fac th\u1eddi gian th\u1ef1c hi\u1ec7n g\u00f3p v\u1ed1n c\u1ee7a Qu\u1ef9. Qu\u00fd Nh\u00e0 \u0110\u1ea7u T\u01b0 vui l\u00f2ng g\u1eedi l\u1ea1i theo m\u1ed9t trong c\u00e1c ph\u01b0\u01a1ng th\u1ee9c n\u00eau t\u1ea1i Ph\u1ea7n V c\u1ee7a Phi\u1ebfu L\u1ea5y \u00dd Ki\u1ebfn.<\/p> <p>&nbsp;<\/p> <p>Tr\u00e2n tr\u1ecdng c\u1ea3m \u01a1n v\u00e0 mong nh\u1eadn \u0111\u01b0\u1ee3c \u00fd ki\u1ebfn c\u1ee7a Nh\u00e0 \u0110\u1ea7u T\u01b0 trong th\u1eddi gian s\u1edbm nh\u1ea5t<\/p> <\/p><\/div>",
                "source" => null,
                "created_at" => "2021-11-28 07:38:38",
                "updated_at" => "2021-11-28 07:38:38"
            ], [
                "url" => "COVID-19",
                "thumbnail" => "https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/news\/z2769804272633_75ef9dd9f82e4fd866a051e3a3206234.jpg",
                "title" => "Chung tay ch\u1ed1ng Covid: C\u00f4ng ty qu\u1ea3n l\u00fd qu\u1ef9 KIM trao t\u1eb7ng 1,000 b\u1ed9 \u0111\u1ed3 b\u1ea3o h\u1ed9 h\u1ed7 tr\u1ee3 c\u00e1c b\u00e1c s\u0129 c\u1ee7a Vi\u1ec7n Pasteur TP. H\u1ed3 Ch\u00ed Minh ch\u1ed1ng d\u1ecbch.",
                "category" => "tin-cong-ty",
                "description" => "<p>H\u01b0\u1edfng \u1ee9ng l\u1eddi k&ecirc;u g\u1ecdi &ldquo;To&agrave;n d&acirc;n \u0111o&agrave;n k\u1ebft, ra s\u1ee9c ph&ograve;ng, ch\u1ed1ng d\u1ecbch b\u1ec7nh COVID-19&rdquo; c\u1ee7a Ch&iacute;nh Ph\u1ee7, C&ocirc;ng ty qu\u1ea3n l&yacute; qu\u1ef9 KIM Vi\u1ec7t Nam (KIM Vi\u1ec7t Nam) \u0111&atilde; trao t\u1eb7ng 1,000 b\u1ed9 \u0111\u1ed3 b\u1ea3o h\u1ed9 t\u1edbi c&aacute;c b&aacute;c s\u0129 tuy\u1ebfn \u0111\u1ea7u ch\u1ed1ng d\u1ecbch c\u1ee7a Vi\u1ec7n Pasteur TP. H\u1ed3 Ch&iacute; Minh<\/p>",
                "detail" => "<p>&lt;div _ngcontent-bdm-c4=&quot;&quot; class=&quot;article__content&quot;&gt;&lt;!----&gt;&lt;div _ngcontent-bdm-c4=&quot;&quot; class=&quot;article__thumbnail_full_width&quot;&gt;&lt;img _ngcontent-bdm-c4=&quot;&quot; src=&quot;https:\/\/koreainvestment.com.vn\/files\/media\/base\/75bc42e13502a08c7e10b0f38750bc3231c26fa7\/news\/z2769804272633_75ef9dd9f82e4fd866a051e3a3206234.jpg&quot; alt=&quot;Chung tay ch\u1ed1ng Covid: C&ocirc;ng ty qu\u1ea3n l&yacute; qu\u1ef9 KIM trao t\u1eb7ng 1,000 b\u1ed9 \u0111\u1ed3 b\u1ea3o h\u1ed9 h\u1ed7 tr\u1ee3 c&aacute;c b&aacute;c s\u0129 c\u1ee7a Vi\u1ec7n Pasteur TP. H\u1ed3 Ch&iacute; Minh ch\u1ed1ng d\u1ecbch. &quot;&gt;&lt;\/div&gt;&lt;!----&gt;&lt;!----&gt;&lt;!----&gt;&lt;p _ngcontent-bdm-c4=&quot;&quot;&gt;&lt;p&gt;&amp;nbsp;&lt;\/p&gt;<\/p> <p>&lt;p style=&quot;margin-top:8px; margin-bottom:8px; text-align:justify&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Times New Roman&amp;quot;,serif&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;S\u1ed1 ca l&acirc;y nhi\u1ec5m ng&agrave;y c&agrave;ng t\u0103ng, di\u1ec5n bi\u1ebfn ph\u1ee9c t\u1ea1p h\u01a1n v\u1edbi kh\u1ea3 n\u0103ng l&acirc;y nhanh h\u01a1n, r\u1ed9ng h\u01a1n, m\u1ea1nh h\u01a1n&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span lang=&quot;VI&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;. H\u01b0\u1edfng \u1ee9ng l\u1eddi k&ecirc;u g\u1ecdi &ldquo;&lt;b&gt;&lt;i&gt;To&agrave;n d&acirc;n \u0111o&agrave;n k\u1ebft, ra s\u1ee9c ph&ograve;ng, ch\u1ed1ng d\u1ecbch b\u1ec7nh COVID-19&lt;\/i&gt;&lt;\/b&gt;&rdquo; c\u1ee7a Ch&iacute;nh Ph\u1ee7,&amp;nbsp; C&ocirc;ng ty qu\u1ea3n l&yacute; qu\u1ef9 KIM Vi\u1ec7t Nam (KIM Vi\u1ec7t Nam) \u0111&atilde; trao t\u1eb7ng 1,000 b\u1ed9 \u0111\u1ed3 b\u1ea3o h\u1ed9 t\u1edbi c&aacute;c b&aacute;c s\u0129 tuy\u1ebfn \u0111\u1ea7u ch\u1ed1ng d\u1ecbch c\u1ee7a Vi\u1ec7n Pasteur TP. H\u1ed3 Ch&iacute; Minh, g&oacute;p m\u1ed9t ph\u1ea7n nh\u1ecf chung tay c&ugrave;ng Ch&iacute;nh Ph\u1ee7 v&agrave; nh&acirc;n d&acirc;n \u0111\u1ea9y l&ugrave;i d\u1ecbch b\u1ec7nh.&amp;nbsp; &lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/p&gt;<\/p> <p>&lt;p style=&quot;margin-top:8px; margin-bottom:8px; text-align:justify&quot;&gt;&amp;nbsp;&lt;\/p&gt;<\/p> <p>&lt;p style=&quot;margin-top:8px; margin-bottom:8px; text-align:justify&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Times New Roman&amp;quot;,serif&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Tr\u01b0\u1edbc&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span lang=&quot;VI&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt; nh\u1eefng \u1ea3nh h\u01b0\u1edfng c\u1ee7a Covid, &lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;KIM&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span lang=&quot;VI&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt; Vi\u1ec7t Nam&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt; c\u0169ng \u0111&atilde; t&iacute;ch c\u1ef1c nhanh ch&oacute;ng tri\u1ec3n khai h&agrave;ng lo\u1ea1t c&aacute;c ho\u1ea1t \u0111\u1ed9ng ph&ograve;ng ch\u1ed1ng d\u1ecbch t\u1ec5 cho nh&acirc;n vi&ecirc;n, \u0111\u1ea3m&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span lang=&quot;VI&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt; b\u1ea3o an to&agrave;n ch\u1ed1ng d\u1ecbch trong ho\u1ea1t \u0111o\u1ea1t kinh doanh, &lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;\u0111\u1eb7t m\u1ee5c ti&ecirc;u ho&agrave;n th&agrave;nh k\u1ebf ho\u1ea1ch k&eacute;p ph&ograve;ng ch\u1ed1ng d\u1ecbch b\u1ec7nh song&amp;nbsp; h&agrave;nh c&ugrave;ng ph&aacute;t tri\u1ec3n kinh t\u1ebf do Ch&iacute;nh ph\u1ee7 \u0111\u1ec1 ra.&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/p&gt;<\/p> <p>&lt;p style=&quot;margin-top:8px; margin-bottom:8px; text-align:justify&quot;&gt;&amp;nbsp;&lt;\/p&gt;<\/p> <p>&lt;p style=&quot;margin-top:8px; margin-bottom:8px; text-align:justify&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Times New Roman&amp;quot;,serif&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;B&ecirc;n&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span lang=&quot;VI&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt; c\u1ea1nh m\u1ee5c ti&ecirc;u ph&aacute;t tri\u1ec3n doanh nghi\u1ec7p b\u1ec1n v\u1eefng, &lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;KIM&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span lang=&quot;VI&quot;&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt; Vi\u1ec7t Nam c\u0169ng &lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;span style=&quot;background:white&quot;&gt;&lt;span style=&quot;line-height:150%&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;kh&ocirc;ng ng\u1eebng n\u1ed7 l\u1ef1c theo \u0111u\u1ed5i c&aacute;c m\u1ee5c ti&ecirc;u g\u1eafn li\u1ec1n v\u1edbi tr&aacute;ch nhi\u1ec7m x&atilde; h\u1ed9i, \u0111&oacute;ng g&oacute;p t&iacute;ch c\u1ef1c cho n\u1ec1n kinh t\u1ebf v&agrave; x&atilde; h\u1ed9i Vi\u1ec7t Nam.&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/span&gt;&lt;\/p&gt;<br \/> &lt;\/p&gt;&lt;\/div&gt;<\/p>",
                "source" => "Cafef",
                "created_at" => "2021-11-28 07:38:38",
                "updated_at" => "2021-11-28 07:38:38"],
        ]);
    }
}
<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Tests\MiniProgram;

use EasyWeChat\MiniProgram\Encryption\Encryptor;
use EasyWeChat\Tests\TestCase;

class EncryptorTest extends TestCase
{
    private function getEncryptor()
    {
        return new Encryptor('appid', 'token', 'aes-key');
    }

    /**
     * Test decryptData().
     */
    public function testDecryptData()
    {
        $encryptedData = 'CiyLU1Aw2KjvrjMdj8YKliAjtP4gsMZMQmRzooG2xrDcvSnxIMXFufNstNGTyaGS9uT5geRa0W4oTOb1WT7fJlAC+oNPdbB+3hVbJSRgv+4lGOETKUQz6OYStslQ142d
                NCuabNPGBzlooOmB231qMM85d2/fV6ChevvXvQP8Hkue1poOFtnEtpyxVLW1zAo6/1Xx1COxFvrc2d7UL/lmHInNlxuacJXwu0fjpXfz/YqYzBIBzD6WUfTIF9GRHpOn
                /Hz7saL8xz+W//FRAUid1OksQaQx4CMs8LOddcQhULW4ucetDf96JcR3g0gfRK4PC7E/r7Z6xNrXd2UIeorGj5Ef7b1pJAYB6Y5anaHqZ9J6nKEBvB4DnNLIVWSgARns
                /8wR2SiRS7MNACwTyrGvt9ts8p12PKFdlqYTopNHR1Vf7XjfhQlVsAJdNiKdYmYVoKlaRv85IfVunYzO0IKXsyl7JCUjCpoG20f0a04COwfneQAGGwd5oa+T8yO5hzuyDb/XcxxmK01EpqOyuxINew==';

        $decrypted = $this->getEncryptor()->decryptData('tiihtNczf5v6AKRyjwEUhQ==', 'r7BXXKkLb8qrSNn05n0qiA==', $encryptedData);

        $this->assertEquals('oGZUI0egBJY1zhBYw2KhdUfwVJJE', $decrypted['openId']);
        $this->assertEquals('ocMvos6NjeKLIBqg5Mr9QjxrP1FA', $decrypted['unionId']);
    }
}

use messaging;
INSERT INTO `messaging`.`virtual_users`
(`id`, `domain_id`, `password` , `email`, `maildir`)
VALUES
('1', '1', ENCRYPT('motDePasseDeToto', CONCAT('$6$', SUBSTRING(SHA(RAND()), -16))), 'toto@mail.localdomain', 'mail.localdomain/toto/');

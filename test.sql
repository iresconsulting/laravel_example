CREATE USER 'playdium'@'playdium' IDENTIFIED BY 'o@vIdT.7!kTkN3-a';

UPDATE mysql.user SET authentication_string=PASSWORD('o@vIdT.7!kTkN3-a') WHERE user='playdium';

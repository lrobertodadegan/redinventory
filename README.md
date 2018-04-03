# RED INVENTORY

## "RED (Read some Equipments Details) Inventory" é um projeto de inventariador automatizado.

### Demo:
[Demo RedInventory - Lucas Roberto](http://35.202.193.119/redinventory/ "RedInventory Demo")

### Instalação e Configuração:
- Clone ou baixe os arquivos do repositório na pasta root do seu WebServer. Se você sua o Apache, copie os arquivos para '/var/www/html/';
- Renomeie o arquivo '.env.default' para '.env'. Ele contém as variáveis globais do seu ambiente. Configurações de contas de serviço provavelmente estarão nele;
- Dê permissão de leitura e escrita nos diretórios abaixo da pasta 'storage' e 'public';
- Acesse via seu navegador de preferência o IP do seu servidor usando o sufixo '/redinventory', por exemplo: 'http://192.168.0.1/redinventory'.
- Siga os passos da configuração e pronto! Pode começar a gerenciar sua rede diretamente pela aplicação.

### Das ferramentas usadas:
- [PHP 7.0](https://secure.php.net/archive/2018.php#id2018-03-02-1)
- [Laravel 5](https://laravel.com/)
- [Laravel L5-Repository](http://github.com/andersao/l5-repository)
- [NMap](https://nmap.org/)

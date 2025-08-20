# FORNECEDORES-LARAVEL

## Instalação Automática

Você pode configurar o projeto automaticamente com o script abaixo (Linux ou Git Bash no Windows).  

> **Requisitos:**  
> - PHP instalado  
> - Composer instalado  
> - MySQL instalado e rodando  
> - Node.js instalado  
> - VS Code (ou outro editor de preferência)  
> - Laravel Installer atualizado (`composer global require laravel/installer`)  

---

## Passo a Passo de Instalação (copiar no terminal todos os passos, exceto 5 e 7)

### 1. Clonar repositório
Dentro da pasta `htdocs` do XAMPP (ou outra de sua preferência), execute:
```bash
git clone https://github.com/HickSouldrow/FORNECEDORES-LARAVEL.git
cd FORNECEDORES-LARAVEL
```

<br>
<br>
<img width="697" height="221" alt="image" src="https://github.com/user-attachments/assets/ad45620f-6ee7-45e5-a5f5-897c1dc0f165" />

# 2. Instalar dependências PHP
Instalando dependências PHP
```bash
composer install
```

# 3. Instalar dependências Node.js
Instalando dependências Node.js
```bash
npm install
```

# 4. Copiar e configurar .env
Configurando arquivo .env
```bash
cp .env.example .env
```

# 5. Configuração de banco no .env
's/DB_DATABASE=.*/DB_DATABASE=fornecedores/' .env
<br>
's/DB_USERNAME=.*/DB_USERNAME=root/' .env
<br>
's/DB_PASSWORD=.*/DB_PASSWORD=/' .env
<br><br>
<img width="287" height="391" alt="image" src="https://github.com/user-attachments/assets/1c10b073-4d15-4284-a29f-2ae7ffc18db4" />

# 6. Criar migrations
Crie as migrations necessárias para as tabelas:

```bash
# Criar migration para tabela cadastro
php artisan make:migration create_cadastro_table

# Criar migration para tabela estoque
php artisan make:migration create_estoque_table
```
<img width="553" height="225" alt="image" src="https://github.com/user-attachments/assets/79e46670-507a-49b4-ab1d-64eb31a5f98f" />

# Criar migration para alterar tabela cadastro
```bash
php artisan make:migration add_razao_social_nome_fantasia_to_cadastro_table
```
<img width="1102" height="311" alt="image" src="https://github.com/user-attachments/assets/121df71a-7a27-4960-8bac-2c86f8ca7d56" />


<img width="601" height="174" alt="image" src="https://github.com/user-attachments/assets/b823fc9f-f5f3-4dd9-92fe-30ca23d03000" />

# 7. Configurar as migrations
Edite os arquivos de migration criados:

--database/migrations/xxxx_xx_xx_xxxxxx_create_cadastro_table.php:

```bash
public function up()
{
    Schema::create('cadastro', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('endereco');
        $table->string('telefone');
        $table->string('cnpj');
        $table->timestamps();
    });
}
```
<img width="664" height="532" alt="image" src="https://github.com/user-attachments/assets/b9a62bb2-f85f-4dca-966d-c1135bd11f5e" />

--database/migrations/xxxx_xx_xx_xxxxxx_create_estoque_table.php:

 ```bash
public function up()
{
    Schema::create('estoque', function (Blueprint $table) {
        $table->id();
        $table->integer('quantidade');
        $table->decimal('valor_unitario', 10, 2);
        $table->foreignId('cadastro_id')->constrained('cadastro');
        $table->timestamps();
    });
}
```
<img width="779" height="510" alt="image" src="https://github.com/user-attachments/assets/1c38e63f-f7dc-408c-924f-3dd6a4ce8d66" />

--database/migrations/xxxx_xx_xx_xxxxxx_add_razao_social_nome_fantasia_to_cadastro_table.php:

```bash
public function up()
{
    Schema::table('cadastro', function (Blueprint $table) {
        $table->string('razao_social')->after('nome');
        $table->string('nome_fantasia')->after('razao_social');
    });
}
```
<img width="727" height="492" alt="image" src="https://github.com/user-attachments/assets/6ea97a2a-0471-4e0a-863d-c69730538509" />

# 8. Rodar migrations
Rodando migrations
```bash
php artisan migrate
```
 ou 
 ```bash
 php artisan migrate:fresh
```
<br><br>

#9. Gerar chave da aplicação
```bash
php artisan key:generate
```
<img width="788" height="478" alt="image" src="https://github.com/user-attachments/assets/6f33af64-3609-4300-a6f0-2943439d8a5c" />


# 10. Rodar build front-end
Rodando npm run dev
```bash
npm run dev
```
<br><br>
<img width="316" height="207" alt="image" src="https://github.com/user-attachments/assets/efc4ec3c-f415-46ee-8657-0cc40b5a9f9b" />


# 11. Rodar servidor Laravel
Iniciando servidor Laravel
```bash
php artisan serve
```
<br><br>
<img width="503" height="212" alt="image" src="https://github.com/user-attachments/assets/eb02a39b-aaf3-4b14-a36a-dd42e2ca6f52" />


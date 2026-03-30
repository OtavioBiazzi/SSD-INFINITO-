# Documentação do Projeto: Padronização Web Etec Vasco Antônio Venchiarutti

**Alunos:** Otávio Giovanelli Biazzi e Pedro Henrique Miranda  
**Disciplina:** Sistemas Web II  
**Turma:** 2°D  
**Data:** 23/03/2026  

---

## 1. Sobre o Projeto

A ideia do trabalho era criar um site com informações sobre os cursos da Etec Vasco Antônio Venchiarutti. A gente fez tudo do zero usando HTML, CSS e JavaScript. Depois, o site passou por uma atualização pra colocar o cabeçalho e o rodapé padrão do Governo do Estado de São Paulo.

O site tem **6 páginas**:

- **index.html** → Página inicial  
- **modulares.html** → Cursos Técnicos Modulares  
- **integrados.html** → Cursos Integrados ao Ensino Médio  
- **integrais.html** → Cursos em Período Integral  
- **matutinos.html** → Cursos do Período Matutino  
- **vespertinos.html** → Cursos do Período Vespertino  

---

## 2. Parte Visual (HTML e CSS)

A gente tentou deixar o site simples e fácil de usar.

- **Organização dos cursos:** Usamos o CSS Grid (aquele `display: grid`) pra organizar os cartões dos cursos em grade. Assim eles se ajeitam certinho tanto no computador quanto no celular.  
- **Padrão do governo:** Pra seguir a identidade visual que o Centro Paula Souza pede, a gente colocou o cabeçalho e o rodapé oficiais do portal SP. Basicamente importamos os arquivos de estilo prontos que o próprio governo disponibiliza.

---

## 3. A parte do JavaScript

Sendo bem honestos: a gente sabia muito pouco de JavaScript antes desse projeto. Quando surgiu a ideia de fazer com que, ao clicar num cartão de curso, aparecesse uma caixa com a descrição dele, a gente ficou meio perdido no começo.

Pra conseguir fazer funcionar, assistimos vídeos no YouTube, pesquisamos bastante e também usamos ferramentas de IA pra entender como montar o código.

**Como funciona:**

Criamos uma função chamada `mostrar(nome, desc)`. Quando o usuário clica num cartão de curso, acontece o seguinte:

1. O JavaScript pega o nome e a descrição que estão ligados àquele cartão.  
2. Procura na página os espaços reservados pro título e pro texto da descrição.  
3. Coloca as informações certas nesses espaços.  
4. Faz a caixa de descrição (que tava escondida) aparecer na tela.  
5. Rola a página pro topo pra pessoa conseguir ler tudo direitinho.  

O bom disso tudo é que o código ficou bem curto. E como todos os cartões seguem o mesmo esquema, foi só copiar a mesma lógica pras outras páginas. Não precisou reinventar nada: uma vez que funcionou numa página, funcionou em todas.

---

## 4. Prints das Páginas

### Página Inicial (index.html)
<img width="1919" height="923" alt="Página Inicial" src="https://github.com/user-attachments/assets/2cc5b0f8-079c-4532-87d4-e4d0ba1ce71c" />

### Cursos Modulares (modulares.html)
<img width="1919" height="939" alt="Cursos Modulares" src="https://github.com/user-attachments/assets/fc3bbf5b-14d3-4ef9-83bf-ea05c745dffd" />

### Cursos Integrados ao Ensino Médio (integrados.html)
<img width="1916" height="907" alt="Cursos Integrados" src="https://github.com/user-attachments/assets/581c9d2e-21a6-4297-9640-6ab1bae5cc75" />

### Cursos Integrais (integrais.html)
<img width="1919" height="754" alt="Cursos Integrais" src="https://github.com/user-attachments/assets/b60c8b3d-8002-4dea-bf38-14642e7a0620" />

### Cursos Matutinos (matutinos.html)
<img width="1919" height="759" alt="Cursos Matutinos" src="https://github.com/user-attachments/assets/4ca263f6-1128-43d4-b6c8-8b9da390375d" />

### Cursos Vespertinos (vespertinos.html)
<img width="1919" height="943" alt="Cursos Vespertinos" src="https://github.com/user-attachments/assets/03712a76-ff31-48cf-a956-3aa68e990a60" />

---

## 5. Código Fonte

Abaixo tá o código completo de cada arquivo do projeto.

---

### 📄 index.html
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC VAV — Cursos</title>
    <link rel="icon" href="imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="govsp-navbar govsp-navbar-expand-lg">
        <a class="govsp-link digital" href="https://spmaisdigital.sp.gov.br" target="_blank">SP + Digital</a>
        <a class="govsp-social" href="https://www.flickr.com/governosp/" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-flickr.png" alt="Flickr Governo de São Paulo" />
        </a>
        <a class="govsp-social" href="https://www.linkedin.com/company/governosp/" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-linkedin.png" alt="Linkedin Governo de São Paulo" />
        </a>
        <a class="govsp-social" href="https://www.tiktok.com/@governosp" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-tiktok.png" alt="TikTok Governo de São Paulo" />
        </a>
        <a class="govsp-social" href="https://www.youtube.com/governosp/" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-youtube.png" alt="Youtube Governo de São Paulo" />
        </a>
        <a class="govsp-social" href="https://www.twitter.com/governosp/" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-twitter.png" alt="Facebook Governo de São Paulo" />
        </a>
        <a class="govsp-social" href="https://www.instagram.com/governosp/" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-insta.png" alt="Instagram Governo de São Paulo" />
        </a>
        <a class="govsp-social" href="https://www.facebook.com/governosp/" target="_blank">
            <img width="26" height="25" class="govsp-icon-social" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-facebook.png" alt="Facebook Governo de São Paulo" />
        </a>
        <p class="govsp-social" style="min-height:auto;">/governosp</p>
        <div id="separador-nav"></div>
        <a class="govsp-acessibilidade" href="javascript:mudaTamanho('body', 1);">
            <img width="24" height="23" class="govsp-acessibilidade" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-big-font.png" alt="Aumentar Fonte">
        </a>
        <a class="govsp-acessibilidade" href="javascript:mudaTamanho('body', -1);">
            <img width="24" height="23" class="govsp-acessibilidade" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-small-font.png" alt="Diminuir Fonte">
        </a>
        <a class="govsp-acessibilidade" href="#" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">
            <img width="24" height="23" class="govsp-acessibilidade" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-contrast.png" alt="Contraste" >
        </a>
        <a class="govsp-acessibilidade" href="http://www.saopaulo.sp.gov.br/fale-conosco/comunicar-erros/" title="Comunicar Erros" target="_blank">
            <img width="27" height="23" class="govsp-acessibilidade" src="https://www.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-error-report.png" >
        </a>
    </nav>
    <h1 class="titulo">ETEC Vasco Antônio Venchiarutti<br>Cursos</h1>
    <div class="categorias">
        <a href="modulares.html" class="catcard">
            <img src="imagens/cursos_modulares.png" alt="modular">
            <h2>Cursos Modulares</h2>
            <p>Especialização Noturna</p>
        </a>
        <a href="integrados.html" class="catcard">
            <img src="imagens/ensino_medio_integrado.png" alt="integrados">
            <h2>Cursos Integrados ao Ensino Médio</h2>
            <p>Ensino Médio + Técnico</p>
        </a>
    </div>
    <footer class="footer">
        <p>Centro Paula Souza — Governo do Estado de São Paulo</p>
        <p>© 2026 ETEC Vasco Antônio Venchiarutti</p>
        <div class="govlogo">
            <a href="https://www.saopaulo.sp.gov.br/" target="_blank">
                <img src="https://www.saopaulo.sp.gov.br/barra-govsp/img/logo-rodape-governo-do-estado-sp.png" alt="sp">
            </a>
        </div>
    </footer>
</body>
</html>
```
---

### 📄 integrados.html
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC VAV — Cursos Integrados</title>
    <link rel="icon" href="imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <link rel="stylesheet" type="text/css" href="https://saopaulo.sp.gov.br/barra-govsp/css/top-padrao-govsp-v2.min.css?vs=3.0">
    <section class="govsp-topo">     
        <div id="govsp-topbarGlobal" class="blu-e">
            <div id="topbarGlobal">
                <div id="topbarLink" class="govsp-black">
                    <div class="govsp-portal">
                        <a href="https://www.saopaulo.sp.gov.br" title="nova guia Site Governo do Estado de São Paulo" target="_blank"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/logo-governo-do-estado-sp.png" alt="logomarca Governo de São Paulo" height="38" class="logo"></a>
                    </div> 
                </div>
                <nav class="govsp-navbar govsp-navbar-expand-lg">                    
                    <a class="govsp-link digital" href="https://spmaisdigital.sp.gov.br" title="site SP + Digital">SP + Digital</a>
                    <a class="govsp-social" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a>                        
                    <a class="govsp-social" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a>                       
                    <p class="govsp-social">/governosp</p>
                    <a class="govsp-acessibilidade" title="nova guia" href="https://www.saopaulo.sp.gov.br/fale-conosco/comunicar-erros/" target="_blank"><img class="govsp-acessibilidade" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-error-report.png" alt="Comunicar um erro"></a>             
                </nav>
            </div>
            <button class="govsp-kebab" id="govsp-kebab" aria-expanded="false"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/dots-menu.png" alt="Menu"></button>
            <ul class="govsp-dropdown vs3" id="govsp-dropdown" aria-hidden="true">               
                <li><a class="govsp-link digital" role="button" href="https://spmaisdigital.sp.gov.br" title="Site SP + Digital">SP + Digital</a></li>
                <li><a class="govsp-social" role="button" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a></li> 
                <li><a class="govsp-social" role="button" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a></li>
                <li><p class="govsp-social">/governosp</p></li>
            </ul> 
        </div>
        <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-top-v2.js?vs=3.0"></script>
        <noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
    </section>
    <h1 class="titulo">Cursos Integrados ao Ensino Médio</h1>
    <div class="categorias tres">
        <a href="integrais.html" class="catcard">
            <img src="imagens/integrais.png" alt="integrais">
            <h2>Cursos Integrais</h2>
        </a>
        <a href="matutinos.html" class="catcard">
            <img src="imagens/matutinos.png" alt="matutinos">
            <h2>Cursos Matutinos</h2>
        </a>
        <a href="vespertinos.html" class="catcard">
            <img src="imagens/vespertinos.png" alt="vespertinos">
            <h2>Cursos Vespertinos</h2>
        </a>
    </div>
    <link rel="stylesheet" type="text/css" href="https://www.saopaulo.sp.gov.br/barra-govsp/css/rodape-padrao-govsp.min.css"> 
    <section id="govsp-rodape">         
        <div class="container">
            <div class="linha-botoes">
                <div class="coluna-4"><a href="https://www.ouvidoria.sp.gov.br/Portal/Default.aspx" class="btn btn-model">Ouvidoria</a></div> 
                <div class="coluna-4"><a href="http://www.transparencia.sp.gov.br/" class="btn btn-model">Transparência</a></div> 
                <div class="coluna-4"><a href="http://www.sic.sp.gov.br/" class="btn btn-model">SIC</a></div> 
            </div>
        </div>
        <div class="container rodape">    
            <div class="logo-rodape">
                <a href="https://www.saopaulo.sp.gov.br/">
                    <img src="https://www.saopaulo.sp.gov.br/barra-govsp/img/logo-rodape-governo-do-estado-sp.png" alt="site do Governo de São Paulo" width="206" height="38">
                </a>
            </div>
        </div>
    </section>
</body>
</html>
```
---

### 📄 integrais.html
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC VAV — Cursos Integrais</title>
    <link rel="icon" href="imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <link rel="stylesheet" type="text/css" href="https://saopaulo.sp.gov.br/barra-govsp/css/top-padrao-govsp-v2.min.css?vs=3.0">
    <section class="govsp-topo">     
        <div id="govsp-topbarGlobal" class="blu-e">
            <div id="topbarGlobal">
                <div id="topbarLink" class="govsp-black">
                    <div class="govsp-portal">
                        <a href="https://www.saopaulo.sp.gov.br" title="nova guia Site Governo do Estado de São Paulo" target="_blank"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/logo-governo-do-estado-sp.png" alt="logomarca Governo de São Paulo" height="38" class="logo"></a>
                    </div> 
                </div>
                <nav class="govsp-navbar govsp-navbar-expand-lg">                    
                    <a class="govsp-link digital" href="https://spmaisdigital.sp.gov.br" title="site SP + Digital">SP + Digital</a>
                    <a class="govsp-social" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a>                        
                    <a class="govsp-social" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a>                       
                    <p class="govsp-social">/governosp</p>
                    <a class="govsp-acessibilidade" title="nova guia" href="https://www.saopaulo.sp.gov.br/fale-conosco/comunicar-erros/" target="_blank"><img class="govsp-acessibilidade" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-error-report.png" alt="Comunicar um erro"></a>             
                </nav>
            </div>
            <button class="govsp-kebab" id="govsp-kebab" aria-expanded="false"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/dots-menu.png" alt="Menu"></button>
            <ul class="govsp-dropdown vs3" id="govsp-dropdown" aria-hidden="true">               
                <li><a class="govsp-link digital" role="button" href="https://spmaisdigital.sp.gov.br" title="Site SP + Digital">SP + Digital</a></li>
                <li><a class="govsp-social" role="button" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a></li> 
                <li><a class="govsp-social" role="button" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a></li>
                <li><p class="govsp-social">/governosp</p></li>
            </ul> 
        </div>
        <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-top-v2.js?vs=3.0"></script>
        <noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
    </section>
    <h1 class="titulo">Cursos Integrados ao Ensino Médio<br>Integrais</h1>
    <div class="desc" id="descarea" style="display:none">
        <h3 id="desctitulo"></h3>
        <p id="desctexto"></p>
    </div>
    <div class="grid">
        <div class="card" onclick="mostrar('Design de Interiores', 'Integra o Ensino Médio com a prática de projetar ambientes, trabalhando com estética, conforto, cores, iluminação e mobiliário para diferentes espaços.')">
            <img src="imagens/design.png" alt="design">
            <h3>Design de Interiores</h3>
        </div>
        <div class="card" onclick="mostrar('Edificações', 'Combina o Ensino Médio com formação em construção civil, incluindo projetos, materiais construtivos e supervisão de obras.')">
            <img src="imagens/edi.png" alt="edificacao">
            <h3>Edificações</h3>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://www.saopaulo.sp.gov.br/barra-govsp/css/rodape-padrao-govsp.min.css"> 
    <section id="govsp-rodape">         
        <div class="container">
            <div class="linha-botoes">
                <div class="coluna-4"><a href="https://www.ouvidoria.sp.gov.br/Portal/Default.aspx" class="btn btn-model">Ouvidoria</a></div> 
                <div class="coluna-4"><a href="http://www.transparencia.sp.gov.br/" class="btn btn-model">Transparência</a></div> 
                <div class="coluna-4"><a href="http://www.sic.sp.gov.br/" class="btn btn-model">SIC</a></div> 
            </div>
        </div>
        <div class="container rodape">    
            <div class="logo-rodape">
                <a href="https://www.saopaulo.sp.gov.br/">
                    <img src="https://www.saopaulo.sp.gov.br/barra-govsp/img/logo-rodape-governo-do-estado-sp.png" alt="site do Governo de São Paulo" width="206" height="38">
                </a>
            </div>
        </div>
    </section>
    <script>
        function mostrar(nome, desc) {
            document.getElementById('desctitulo').textContent = nome;
            document.getElementById('desctexto').textContent = desc;
            document.getElementById('descarea').style.display = 'block';
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>
```
---

### 📄 matutinos.html
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC VAV — Cursos Matutinos</title>
    <link rel="icon" href="imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <link rel="stylesheet" type="text/css" href="https://saopaulo.sp.gov.br/barra-govsp/css/top-padrao-govsp-v2.min.css?vs=3.0">
    <section class="govsp-topo">     
        <div id="govsp-topbarGlobal" class="blu-e">
            <div id="topbarGlobal">
                <div id="topbarLink" class="govsp-black">
                    <div class="govsp-portal">
                        <a href="https://www.saopaulo.sp.gov.br" title="nova guia Site Governo do Estado de São Paulo" target="_blank"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/logo-governo-do-estado-sp.png" alt="logomarca Governo de São Paulo" height="38" class="logo"></a>
                    </div> 
                </div>
                <nav class="govsp-navbar govsp-navbar-expand-lg">                    
                    <a class="govsp-link digital" href="https://spmaisdigital.sp.gov.br" title="site SP + Digital">SP + Digital</a>
                    <a class="govsp-social" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a>                        
                    <a class="govsp-social" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a>                       
                    <p class="govsp-social">/governosp</p>
                    <a class="govsp-acessibilidade" title="nova guia" href="https://www.saopaulo.sp.gov.br/fale-conosco/comunicar-erros/" target="_blank"><img class="govsp-acessibilidade" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-error-report.png" alt="Comunicar um erro"></a>             
                </nav>
            </div>
            <button class="govsp-kebab" id="govsp-kebab" aria-expanded="false"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/dots-menu.png" alt="Menu"></button>
            <ul class="govsp-dropdown vs3" id="govsp-dropdown" aria-hidden="true">               
                <li><a class="govsp-link digital" role="button" href="https://spmaisdigital.sp.gov.br" title="Site SP + Digital">SP + Digital</a></li>
                <li><a class="govsp-social" role="button" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a></li> 
                <li><a class="govsp-social" role="button" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a></li>
                <li><p class="govsp-social">/governosp</p></li>
            </ul> 
        </div>
        <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-top-v2.js?vs=3.0"></script>
        <noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
    </section>
    <h1 class="titulo">Cursos Integrados ao Ensino Médio<br>Matutinos</h1>
    <div class="desc" id="descarea" style="display:none">
        <h3 id="desctitulo"></h3>
        <p id="desctexto"></p>
    </div>
    <div class="grid">
        <div class="card" onclick="mostrar('Administração', 'Alia a formação geral do Ensino Médio com competências em gestão de empresas, finanças corporativas e planejamento estratégico.')">
            <img src="imagens/adm.png" alt="admin">
            <h3>Administração</h3>
        </div>
        <div class="card" onclick="mostrar('Desenvolvimento de Sistemas', 'Forma desenvolvedores desde o Ensino Médio, com foco em programação de softwares, criação de aplicações web e manipulação de bancos de dados.')">
            <img src="imagens/ds.png" alt="dc">
            <h3>Desenvolvimento de Sistemas</h3>
        </div>
        <div class="card" onclick="mostrar('Informática para Internet', 'Habilita o estudante a criar sites, sistemas web e aplicações online usando linguagens de programação atuais e ferramentas de design digital.')">
            <img src="imagens/infonet.png" alt="infonet">
            <h3>Informática para Internet</h3>
        </div>
        <div class="card" onclick="mostrar('Logística', 'Integra o Ensino Médio com a gestão logística, abordando transporte, armazenamento e distribuição de mercadorias.')">
            <img src="imagens/log.png" alt="logist">
            <h3>Logística</h3>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://www.saopaulo.sp.gov.br/barra-govsp/css/rodape-padrao-govsp.min.css"> 
    <section id="govsp-rodape">         
        <div class="container">
            <div class="linha-botoes">
                <div class="coluna-4"><a href="https://www.ouvidoria.sp.gov.br/Portal/Default.aspx" class="btn btn-model">Ouvidoria</a></div> 
                <div class="coluna-4"><a href="http://www.transparencia.sp.gov.br/" class="btn btn-model">Transparência</a></div> 
                <div class="coluna-4"><a href="http://www.sic.sp.gov.br/" class="btn btn-model">SIC</a></div> 
            </div>
        </div>
        <div class="container rodape">    
            <div class="logo-rodape">
                <a href="https://www.saopaulo.sp.gov.br/">
                    <img src="https://www.saopaulo.sp.gov.br/barra-govsp/img/logo-rodape-governo-do-estado-sp.png" alt="site do Governo de São Paulo" width="206" height="38">
                </a>
            </div>
        </div>
    </section>
    <script>
        function mostrar(nome, desc) {
            document.getElementById('desctitulo').textContent = nome;
            document.getElementById('desctexto').textContent = desc;
            document.getElementById('descarea').style.display = 'block';
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>
```
---

### 📄 modulares.html
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC VAV — Cursos Modulares</title>
    <link rel="icon" href="imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <link rel="stylesheet" type="text/css" href="https://saopaulo.sp.gov.br/barra-govsp/css/top-padrao-govsp-v2.min.css?vs=3.0">
    <section class="govsp-topo">     
        <div id="govsp-topbarGlobal" class="blu-e">
            <div id="topbarGlobal">
                <div id="topbarLink" class="govsp-black">
                    <div class="govsp-portal">
                        <a href="https://www.saopaulo.sp.gov.br" title="nova guia Site Governo do Estado de São Paulo" target="_blank"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/logo-governo-do-estado-sp.png" alt="logomarca Governo de São Paulo" height="38" class="logo"></a>
                    </div> 
                </div>
                <nav class="govsp-navbar govsp-navbar-expand-lg">                    
                    <a class="govsp-link digital" href="https://spmaisdigital.sp.gov.br" title="site SP + Digital">SP + Digital</a>
                    <a class="govsp-social" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a>                        
                    <a class="govsp-social" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a>                       
                    <p class="govsp-social">/governosp</p>
                    <a class="govsp-acessibilidade" title="nova guia" href="https://www.saopaulo.sp.gov.br/fale-conosco/comunicar-erros/" target="_blank"><img class="govsp-acessibilidade" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-error-report.png" alt="Comunicar um erro"></a>             
                </nav>
            </div>
            <button class="govsp-kebab" id="govsp-kebab" aria-expanded="false"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/dots-menu.png" alt="Menu"></button>
            <ul class="govsp-dropdown vs3" id="govsp-dropdown" aria-hidden="true">               
                <li><a class="govsp-link digital" role="button" href="https://spmaisdigital.sp.gov.br" title="Site SP + Digital">SP + Digital</a></li>
                <li><a class="govsp-social" role="button" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a></li> 
                <li><a class="govsp-social" role="button" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a></li>
                <li><p class="govsp-social">/governosp</p></li>
            </ul> 
        </div>
        <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-top-v2.js?vs=3.0"></script>
        <noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
    </section>
    <h1 class="titulo">Cursos Modulares</h1>
    <div class="desc" id="descarea" style="display:none">
        <h3 id="desctitulo"></h3>
        <p id="desctexto"></p>
    </div>
    <div class="grid">
        <div class="card" onclick="mostrar('Administração', 'Prepara profissionais para atuarem na gestão de empresas, abrangendo áreas como finanças, organização corporativa e elaboração de estratégias de negócios.')">
            <img src="imagens/adm.png" alt="admin">
            <h3>Administração</h3>
        </div>
        <div class="card" onclick="mostrar('Agrimensura', 'Ensina técnicas de medição, mapeamento e demarcação de terrenos, preparando o aluno para auxiliar em projetos de engenharia e no planejamento territorial.')">
            <img src="imagens/modulares.png" alt="agri">
            <h3>Agrimensura</h3>
        </div>
        <div class="card" onclick="mostrar('Defesa Civil', 'Prepara o aluno para atuar na prevenção e mitigação de desastres, gestão de riscos e auxílio a populações em situações de emergência.')">
            <img src="imagens/defesacivil.png" alt="defesacivil">
            <h3>Defesa Civil</h3>
        </div>
        <div class="card" onclick="mostrar('Desenvolvimento de Sistemas', 'Capacita o aluno para a criação de softwares, aplicações web e manipulação de bancos de dados, com foco em lógica de programação e tecnologias de back-end.')">
            <img src="imagens/ds.png" alt="dc">
            <h3>Desenvolvimento de Sistemas</h3>
        </div>
        <div class="card" onclick="mostrar('Edificações', 'Forma técnicos para atuar na construção civil, com aprendizado em projetos arquitetônicos, materiais de construção e acompanhamento de obras.')">
            <img src="imagens/edi.png" alt="edifi">
            <h3>Edificações</h3>
        </div>
        <div class="card" onclick="mostrar('Logística', 'Prepara o aluno para atuar no planejamento e controle de processos de transporte, armazenamento e distribuição de mercadorias.')">
            <img src="imagens/log.png" alt="logist">
            <h3>Logística</h3>
        </div>
        <div class="card" onclick="mostrar('Meio Ambiente', 'Desenvolve profissionais conscientes sobre preservação ambiental, uso sustentável dos recursos naturais e implementação de políticas de sustentabilidade.')">
            <img src="imagens/meioamb.png" alt="meioamb">
            <h3>Meio Ambiente</h3>
        </div>
        <div class="card" onclick="mostrar('Saneamento', 'Forma profissionais para atuarem em sistemas de abastecimento de água, tratamento de esgoto e gestão de resíduos, promovendo a saúde pública.')">
            <img src="imagens/saneamento.png" alt="saneamento">
            <h3>Saneamento</h3>
        </div>
        <div class="card" onclick="mostrar('Segurança do Trabalho', 'Ensina a prevenir acidentes ocupacionais e garantir ambientes de trabalho seguros, com estudo de normas regulamentadoras e análise de riscos.')">
            <img src="imagens/segtrab.png" alt="seguranca">
            <h3>Segurança do Trabalho</h3>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://www.saopaulo.sp.gov.br/barra-govsp/css/rodape-padrao-govsp.min.css"> 
    <section id="govsp-rodape">         
        <div class="container">
            <div class="linha-botoes">
                <div class="coluna-4"><a href="https://www.ouvidoria.sp.gov.br/Portal/Default.aspx" class="btn btn-model">Ouvidoria</a></div> 
                <div class="coluna-4"><a href="http://www.transparencia.sp.gov.br/" class="btn btn-model">Transparência</a></div> 
                <div class="coluna-4"><a href="http://www.sic.sp.gov.br/" class="btn btn-model">SIC</a></div> 
            </div>
        </div>
        <div class="container rodape">    
            <div class="logo-rodape">
                <a href="https://www.saopaulo.sp.gov.br/">
                    <img src="https://www.saopaulo.sp.gov.br/barra-govsp/img/logo-rodape-governo-do-estado-sp.png" alt="site do Governo de São Paulo" width="206" height="38">
                </a>
            </div>
        </div>
    </section>
    <script>
        function mostrar(nome, desc) {
            document.getElementById('desctitulo').textContent = nome;
            document.getElementById('desctexto').textContent = desc;
            document.getElementById('descarea').style.display = 'block';
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>
```
---

### 📄 vespertinos.html
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC VAV — Cursos Vespertinos</title>
    <link rel="icon" href="imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <link rel="stylesheet" type="text/css" href="https://saopaulo.sp.gov.br/barra-govsp/css/top-padrao-govsp-v2.min.css?vs=3.0">
    <section class="govsp-topo">     
        <div id="govsp-topbarGlobal" class="blu-e">
            <div id="topbarGlobal">
                <div id="topbarLink" class="govsp-black">
                    <div class="govsp-portal">
                        <a href="https://www.saopaulo.sp.gov.br" title="nova guia Site Governo do Estado de São Paulo" target="_blank"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/logo-governo-do-estado-sp.png" alt="logomarca Governo de São Paulo" height="38" class="logo"></a>
                    </div> 
                </div>
                <nav class="govsp-navbar govsp-navbar-expand-lg">                    
                    <a class="govsp-link digital" href="https://spmaisdigital.sp.gov.br" title="site SP + Digital">SP + Digital</a>
                    <a class="govsp-social" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a>                        
                    <a class="govsp-social" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a>
                    <a class="govsp-social" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a>                       
                    <p class="govsp-social">/governosp</p>
                    <a class="govsp-acessibilidade" title="nova guia" href="https://www.saopaulo.sp.gov.br/fale-conosco/comunicar-erros/" target="_blank"><img class="govsp-acessibilidade" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-error-report.png" alt="Comunicar um erro"></a>             
                </nav>
            </div>
            <button class="govsp-kebab" id="govsp-kebab" aria-expanded="false"><img src="https://saopaulo.sp.gov.br/barra-govsp/img/dots-menu.png" alt="Menu"></button>
            <ul class="govsp-dropdown vs3" id="govsp-dropdown" aria-hidden="true">               
                <li><a class="govsp-link digital" role="button" href="https://spmaisdigital.sp.gov.br" title="Site SP + Digital">SP + Digital</a></li>
                <li><a class="govsp-social" role="button" href="https://www.flickr.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-flickr.png" alt="Flickr Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.linkedin.com/company/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-linkedin.png" alt="Linkedin Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.tiktok.com/@governosp"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-tiktok.png" alt="TikTok Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.twitter.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-twitter.png" alt="Twitter Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.youtube.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-youtube.png" alt="Youtube Governo do Estado de SP" /></a></li> 
                <li><a class="govsp-social" role="button" href="https://www.instagram.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-insta.png" alt="Instagram Governo do Estado de SP" /></a></li>
                <li><a class="govsp-social" role="button" href="https://www.facebook.com/governosp/"><img class="govsp-icon-social" src="https://saopaulo.sp.gov.br/barra-govsp/img/i-facebook.png" alt="Facebook Governo do Estado de SP" /></a></li>
                <li><p class="govsp-social">/governosp</p></li>
            </ul> 
        </div>
        <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-top-v2.js?vs=3.0"></script>
        <noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
    </section>
    <h1 class="titulo">Cursos Integrados ao Ensino Médio<br>Vespertinos</h1>
    <div class="desc" id="descarea" style="display:none">
        <h3 id="desctitulo"></h3>
        <p id="desctexto"></p>
    </div>
    <div class="grid">
        <div class="card" onclick="mostrar('Administração', 'Alia a formação geral do Ensino Médio com competências em gestão de empresas, finanças corporativas e planejamento estratégico.')">
            <img src="imagens/adm.png" alt="administracao">
            <h3>Administração</h3>
        </div>
        <div class="card" onclick="mostrar('Desenvolvimento de Sistemas', 'Forma desenvolvedores desde o Ensino Médio, com foco em programação de softwares, criação de aplicações web e manipulação de bancos de dados.')">
            <img src="imagens/ds.png" alt="dc">
            <h3>Desenvolvimento de Sistemas</h3>
        </div>
        <div class="card" onclick="mostrar('Informática para Internet', 'Habilita o estudante a criar sites, sistemas web e aplicações online usando linguagens de programação atuais e ferramentas de design digital.')">
            <img src="imagens/infonet.png" alt="infonet">
            <h3>Informática para Internet</h3>
        </div>
        <div class="card" onclick="mostrar('Meio Ambiente', 'Forma jovens comprometidos com a preservação ambiental e sustentabilidade, aliando o currículo do Ensino Médio a conhecimentos técnicos.')">
            <img src="imagens/meioamb.png" alt="meioamb">
            <h3>Meio Ambiente</h3>
        </div>
        <div class="card" onclick="mostrar('Recursos Humanos', 'Prepara o estudante para gerir pessoas em organizações, com aprendizado em recrutamento, seleção, treinamento e desenvolvimento de equipes.')">
            <img src="imagens/rh.png" alt="recursohumano">
            <h3>Recursos Humanos</h3>
        </div>
        <div class="card" onclick="mostrar('Segurança do Trabalho', 'Combina o Ensino Médio com formação em prevenção de acidentes, normas de segurança e proteção dos trabalhadores.')">
            <img src="imagens/segtrab.png" alt="seguranca">
            <h3>Segurança do Trabalho</h3>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://www.saopaulo.sp.gov.br/barra-govsp/css/rodape-padrao-govsp.min.css"> 
    <section id="govsp-rodape">         
        <div class="container">
            <div class="linha-botoes">
                <div class="coluna-4"><a href="https://www.ouvidoria.sp.gov.br/Portal/Default.aspx" class="btn btn-model">Ouvidoria</a></div> 
                <div class="coluna-4"><a href="http://www.transparencia.sp.gov.br/" class="btn btn-model">Transparência</a></div> 
                <div class="coluna-4"><a href="http://www.sic.sp.gov.br/" class="btn btn-model">SIC</a></div> 
            </div>
        </div>
        <div class="container rodape">    
            <div class="logo-rodape">
                <a href="https://www.saopaulo.sp.gov.br/">
                    <img src="https://www.saopaulo.sp.gov.br/barra-govsp/img/logo-rodape-governo-do-estado-sp.png" alt="site do Governo de São Paulo" width="206" height="38">
                </a>
            </div>
        </div>
    </section>
    <script>
        function mostrar(nome, desc) {
            document.getElementById('desctitulo').textContent = nome;
            document.getElementById('desctexto').textContent = desc;
            document.getElementById('descarea').style.display = 'block';
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>
```
---

### 🎨 style.css
```
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
        scroll-behavior: auto;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #eee;
        color: #333;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    a {
        text-decoration: none;
        color: inherit;
        outline: none;
    }

    .navbar {
        background: #fff;
        border-bottom: 1px solid #ccc;
        padding: 0 30px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 1;
    }

    .navbar .logo {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
        font-size: 16px;
        color: #b91c1c;
        float: left;
    }

    .navbar .logo img {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        vertical-align: middle;
    }

    .navbar nav {
        display: flex;
        gap: 20px;
        float: right;
    }

    .navbar nav a {
        font-size: 14px;
        font-weight: 500;
        color: #666;
        padding-bottom: 2px;
        border-bottom: 2px solid transparent;
        display: inline-block;
    }

    .navbar nav a:hover {
        color: #b91c1c;
    }

    .navbar nav a.ativo {
        color: #b91c1c;
        border-bottom-color: #b91c1c;
    }

    .titulo {
        text-align: center;
        padding: 36px 20px 20px;
        font-size: 22px;
        font-weight: 700;
        color: #333;
        display: block;
        clear: both;
    }

    .categorias {
        max-width: 1000px;
        margin: 10px auto 50px;
        padding: 0 20px;
        display: flex;
        gap: 32px;
        justify-content: center;
        clear: both;
    }

    .categorias.tres {
        max-width: 1100px;
    }

    .categorias p {
        padding-bottom: 15px;
    }

    .catcard {
        background: #fff;
        border: 2px solid #ccc;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        flex: 1;
        overflow: hidden;
        position: relative;
    }

    .catcard:hover {
        border-color: #b91c1c;
    }

    .catcard img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        background: #ddd;
        display: block;
    }

    .catcard h2 {
        font-size: 18px;
        font-weight: 600;
        padding: 12px 13px;
        color: #333;
        margin: 0;
    }

    .grid {
        max-width: 1200px;
        margin: 10px auto 40px;
        padding: 0 20px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        clear: both;
    }

    .card {
        background: #fff;
        border: 2px solid #ccc;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        cursor: pointer;
        overflow: hidden;
        float: none;
    }

    .card:hover {
        border-color: #b91c1c;
    }

    .card.ativo {
        border-color: #b91c1c;
    }

    .card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        background: #ddd;
        display: block;
        border: none;
    }

    .card h3 {
        font-size: 15px;
        font-weight: 600;
        padding: 14px 8px;
        color: #333;
        margin: 0;
        display: block;
    }

    .desc {
        display: none;
        max-width: 1200px;
        margin: 0 auto 16px;
        padding: 20px;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 12px;
        clear: both;
        position: relative;
    }

    .desc h3 {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    .desc p {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
        margin: 0;
    }

    .footer {
        background: #333;
        color: #999;
        text-align: center;
        padding: 24px 20px;
        font-size: 12px;
        margin-top: auto;
        clear: both;
        position: relative;
    }

    .footer p {
        margin: 0;
        display: block;
    }

    .footer .govlogo {
        margin-top: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .footer .govlogo a {
        display: inline-block;
        line-height: 0;
    }

    .footer .govlogo img {
        height: 24px;
        opacity: 0.8;
        vertical-align: middle;
        border: none;
    }
    ```

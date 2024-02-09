-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Fev-2024 às 03:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinhos`
--

CREATE TABLE `carrinhos` (
  `idCar` int(11) NOT NULL,
  `idC` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `precoP` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idC` int(11) NOT NULL,
  `nomeC` varchar(255) NOT NULL,
  `emailC` varchar(255) NOT NULL,
  `senhaC` varchar(255) NOT NULL,
  `telefoneC` int(10) NOT NULL,
  `cidadeC` varchar(70) NOT NULL,
  `bairroC` varchar(70) NOT NULL,
  `enderecoC` varchar(70) NOT NULL,
  `nC` varchar(5) NOT NULL,
  `CEPC` varchar(8) NOT NULL,
  `UFC` varchar(2) NOT NULL,
  `paisC` varchar(30) NOT NULL,
  `CPFC` varchar(11) NOT NULL,
  `vendedor` int(1) NOT NULL,
  `imgC` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idC`, `nomeC`, `emailC`, `senhaC`, `telefoneC`, `cidadeC`, `bairroC`, `enderecoC`, `nC`, `CEPC`, `UFC`, `paisC`, `CPFC`, `vendedor`, `imgC`) VALUES
(1, 'lost', 'lost@gmail.com', '12345', 2147483647, 'ddddd', 'sgngsg', 'efhgeatgwethe', '44', '35353553', 'SS', 'ffff', '5626', 0, 'img-1700572359.jpg'),
(2, 'true', 'true@gmail.com', '12345', 777777777, 'adm', 'adm', 'admadmadm', '232', '234', 'ad', 'adm', '2534', 1, ''),
(3, 'Harmony Store', 'harmonystore@gmail.com', '12345', 2147483647, '', '', '', '', '', '', '', '', 1, 'img-1699355683.jpg'),
(4, 'pedro', 'pedro@gmail.com', '12345', 7996868, 'Adamantina', 'Vila Nova', 'rua pedro soares', '434', '24244234', 'SP', 'BrasÃ­l', '234242424', 0, 'img-1699966994.jpg'),
(5, 'Douglas Peixoto', 'douglas@gmail.com', '12345', 2147483647, '', '', '', '', '', '', '', '', 0, 'img-1700572434.jpg'),
(6, 'JoÃ£o FabrÃ­cio', 'Joao@gmail.com', '12345', 2147483647, '', '', '', '', '', '', '', '', 0, 'img-1700572599.jpg'),
(7, 'Ana Clara', 'anaclara@gmail.com', '12345', 1899992443, 'Adamantina', 'aaaaaa', 'gwrgerg4', '55', '24224524', 'sp', 'BarasÃ­l', '333434', 0, 'img-1700575196.jpg'),
(8, 'noimg', 'noimg@gmail.com', '12345', 323333333, '', '', '', '', '', '', '', '', 0, ''),
(9, 'MC pipokinha', 'pipokinha@gmail.com', '12345', 555555555, '', '', '', '', '', '', '', '', 0, 'img-1701265834.jpg'),
(10, 'jotinha', 'jotinha@gmail.com', '12345', 2147483647, 'césio', 'vale da homosexualidade', 'jkodfnjosrrwf', '666', '3333333', 'Mo', 'paraguai', '333333', 0, 'img-1701373639.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `CTcod` int(11) NOT NULL,
  `nomeCT` varchar(60) NOT NULL,
  `emailCT` varchar(80) NOT NULL,
  `telefoneCT` int(12) NOT NULL,
  `mensagemCT` varchar(250) NOT NULL,
  `idC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`CTcod`, `nomeCT`, `emailCT`, `telefoneCT`, `mensagemCT`, `idC`) VALUES
(8, 'ryhdfyhdrh', 'sryjdyf@gmail.com', 34355455, 'dfhjdghmjdhgjdjdjd', 5),
(9, 'Ana clara', 'anaclara@gmail.com', 2147483647, 'Ã³timo produto!!', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_produto`
--

CREATE TABLE `tabela_produto` (
  `cod_produto` int(11) NOT NULL,
  `tipo_produto` int(11) NOT NULL,
  `nome_produto` varchar(5000) NOT NULL,
  `categoria_produto` varchar(150) NOT NULL,
  `descricao_produto` varchar(5000) NOT NULL,
  `avaliacao_produto` double NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `porcentagem_desconto_produto` double NOT NULL,
  `imagem_produto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tabela_produto`
--

INSERT INTO `tabela_produto` (`cod_produto`, `tipo_produto`, `nome_produto`, `categoria_produto`, `descricao_produto`, `avaliacao_produto`, `valor_produto`, `porcentagem_desconto_produto`, `imagem_produto`) VALUES
(20, 1, 'Moletom Canguru Masculino Marshmello com Capuz e Bolso - Preto', 'Moletom', 'Nossa blusa moletom é confeccionada em 50% Algodão e 50% Poliéster e com a parte interna toda flanelada.\r\n Possui capuz ajustável, ilhós na saída do cordão e bolsos frontais tipo canguru. Ideal para compor looks confortáveis, casuais e esportivos. \r\nTABELA DE TAMANHOS P - 51 cm de largura x 59 cm de altura, Manga 56 cm; M - 54 cm de largura x 60 cm de altura, Manga 60 cm; G - 58 cm de largura x 65 cm de altura Manga 62 cm; GG - 63 cm de largura x 72 cm de altura, Manga 67 cm.\r\nNome: Moletom Canguru Masculino Marshmello com Capuz e Bolso\r\nGênero: Masculino\r\nDepartamento BS: Esporte\r\nIndicado para: Dia a Dia\r\nMarca: Benellys', 4, '80.00', 5, 'img-1701719585.jpg'),
(21, 1, 'Moletom Blusa de Frio  Bolso Liso Flanelado Canguru Com Capuz  - Marinho', 'Moletom', 'Blusa de frio moletom unissex bolso canguru flanelado algodão liso básico é a melhor opção para o inverno aposte no conforto e qualidade do moletom para completar seu visual nos dias mais frios. \r\nFabricado em material 58% algodão 42% poliéster, malha flanelada com gramatura encorpada de excelente qualidade, a peça de estilo clássico possui bolso canguru e capuz. \r\nO moletom garante a sensação de maciez e te mantém aquecido em dias mais frios.\r\n Material Interno: Flanelado Algodão Bolso: Estilo Canguru Com Capuz Medidas: P, M, G e GG Barras e Punho com elásticos Costuras reforçadas Tabela de Medidas: P – Altura = 56Cm – Largura = 54Cm – Mangas = 57Cm M – Altura = 60Cm – Largura = 57Cm – Mangas = 60Cm G - Altura = 65Cm - Largura = 61Cm - Mangas = 63Cm GG- Altura = 68Cm - Largura = 65Cm - Mangas = 69Cm INSTRUÇÕES DE LAVAGEM: -Lavar na máquina com ciclo leve -Não lavar a seco -Secar a sombra -Não forçar secagem atrás de geladeiras e fornos.\r\n\r\nNome: Moletom Blusa de Frio Unissex Bolso Liso Flanelado Canguru Com Capuz em Algodão\r\nGênero: Unissex\r\nComplemento da Descrição 2: O Moletom veio trazer um complemento ao seu look proporcionando estilo, conforto, aquecimento e muito mais. Com elástico no pulso podendo ajustar a cada tamanho, e um cordão de ajuste no capuz.\r\nDepartamento BS: Roupas\r\nComplemento da Descrição 1: Tabela de Medidas: P – Altura = 56Cm – Largura = 54Cm – Mangas = 57Cm M – Altura = 60Cm – Largura = 57Cm – Mangas = 60Cm G - Altura = 65Cm - Largura = 61Cm - Mangas = 63Cm GG- Altura = 68Cm - Largura = 65Cm - Mangas = 69Cm\r\nIndicado para: Dia a Dia\r\nOcasião: Conforto\r\nEstilo da Peça: Lisa\r\nCapuz: Com Capuz\r\nMaterial: Algodão\r\nFechamento: Com cordão\r\nBolso: Canguru\r\nComposição: 58% Algodão e 42% Poliester\r\nAdicionais: INSTRUÇÕES DE LAVAGEM: -Lavar na máquina com ciclo leve -Não lavar a seco -Secar a sombra -Não forçar secagem atrás de geladeiras e fornos.\r\nMarca: Mr Shoes', 5, '112.00', 12, 'img-1701720415.jpg'),
(22, 1, 'Camiseta Algodão Sb Tardezinha Moderna Reserva - Preto', 'Camisa', 'Nome: Camiseta Algodão Sb Tardezinha Moderna Reserva\r\nGênero: Masculino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nOcasião: Conforto\r\nEstilo da Peça: Estampada\r\nGola: Gola U\r\nManga: Manga Curta\r\nGarantia do Fabricante: Contra defeitos de fabricação', 3, '120.00', 14, 'img-1701724219.jpg'),
(23, 1, 'Camiseta Algodão Bebidas Mundo Reserva - Preto', 'Camisa', 'Sabe aquela sua camiseta preferida que você usa até não dar mais?! A Reserva também tem os seus xodós da temporada e uma delas com certeza é a sua cara.ESPECIFICAÇÕES TÉCNICASIndicado para: Dia a DiaEstilo: CasualMaterial: AlgodãoTipo de gola: Gola UTipo de manga: CurtaDesenho do tecido: LisaUnidades por embalagem: 1 unidadeGarantia do Fabricante: Contra defeitos de fabricação\r\n\r\nNome: Camiseta Algodão Bebidas Mundo Reserva\r\nGênero: Masculino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nManga: Manga Curta\r\nComposição: 100% Algodão\r\nGarantia do Fabricante: Contra defeitos de fabricação', 5, '110.00', 22, 'img-1701724759.jpg'),
(24, 1, 'Calça Jeans Skinny Grifle Casual Masculina - Preto', 'calça', 'Vai de estilo! Marque presença nessa estação com a Calça Jeans Skinny Grifle, perfeita para todos os momentos. Com caimento leve, tem cintura média, bolsos frontais e modelagem lisa. Combine com produções casuais. Você sempre na moda!\r\n\r\nNome: Calça Jeans Skinny Grifle Casual Masculina\r\nGênero: Masculino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nEstilo da Peça: Lisa\r\nModelagem: Skinny\r\nMaterial: Jeans\r\nBolso: Com bolso\r\nCós: Com passantes\r\nFechamento: Com zíper e botão\r\nComposição: 75% Algodão, 22% Poliéster, 3% Elastano\r\nDimensões Aproximadas: Modelo veste 40: Cintura: 86 cm, Comprimento: 108 cm\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 3, '90.00', 8, 'img-1701724984.jpg'),
(25, 1, 'Calça Jeans Skinny Vale de West Casual Masculina - Preto', 'calça', 'Perfeitas para acompanhar sua rotina, o Kit Calça Jeans Skinny Vale de West garante conforto e estilo. Com caimento leve, tem modelagem justinha com elastano, cintura média e bolsos traseiro. Kit conta com 2 Peças. Combine com produções casuais ou formais. Você sempre na moda!\r\n\r\nNome: Kit Calça Jeans Skinny Vale de West Casual Masculina - 2 Peças\r\nGênero: Masculino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nEstilo da Peça: Lisa\r\nModelagem: Skinny\r\nTipo: Jeans\r\nMaterial: Poliéster\r\nBolso: Com bolso\r\nCós: Com passantes\r\nFechamento: Com zíper e botão\r\nComposição: 75% Poliéster/ 23,5% Algodão/ 1,5 Elastano\r\nDimensões Aproximadas: Medidas da Peça (Tamaho 40) : Cintura: 84 cm, Comprimento: 105 cm\r\nImportante: Kit c/ 2 pçs\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 4, '120.00', 33, 'img-1701725177.jpg'),
(26, 5, 'Tenis Masculino Casual Leve E Confortável - Branco', 'Tenis', ' A Forma do tênis é Normal, recomendamos que você faça a comparação das medidas com uma palmilha que já usa, segue tabela abaixo:lça! 34 - 23Cm 35 - 23.5Cm 36 - 24.5Cm 37 - 25Cm 38 - 25.5Cm 39 - 26.5Cm 40 - 27.5Cm 41 - 28 Cm 42 - 28.5Cm 43 - 29Cm DÚVIDAS FREQUENTES: - Os produtos são novos? Todos os produtos são novos! Por que comprar conosco? - Compra Garantida: seu dinheiro 100% protegido. Caso seu produto não seja entregue, o Mercado Livre devolve o seu dinheiro; - Produtos selecionados, da mais alta qualidade, todos inspecionados antes do envio; - Todas as vendas são acompanhadas de Nota Fiscal, mais uma garantia de procedência, qualidade e segurança. Tem alguma dúvida? Temos uma equipe disponível para te atender em horário comercial!\r\n\r\nNome: Tenis Masculino e Feminino Casual Leve E Confortável\r\nGênero: Unissex\r\nDepartamento BS: Calçados\r\nIndicado para: Dia a Dia', 4, '230.00', 44, 'img-1701725551.jpg'),
(27, 1, 'Tênis Masculino Off White Caminhada Corrida Performance Aditus - Preto+Grafite', 'Tenis', 'O tênis Off-white traz um update visual inédito. Composto por uma versão aprimorada você garante sua caminhada diária. Sua composição feita de material têxtil e solado em borracha antiderrapante, que proporciona leveza e segurança. O modelo conta também com fechamento em cadarço e forro em material resistente, garantindo agilidade e comodidade nas atividades do dia a dia. Com visual minimalista, propõe um cabedal com maior respirabilidade, sua palmilha em EVA garante proteção contra maus odores. Indicado para caminhadas, aposte no tênis com calças de compressão e bermudas.\r\n\r\nNome: Tênis Masculino Off White Caminhada Corrida Performance Aditus\r\nGênero: Masculino\r\nDepartamento BS: Calçados\r\nIndicado para: Dia a Dia', 5, '260.00', 24, 'img-1701725713.jpg'),
(28, 1, 'Short Masculino Básico Bermuda Praia Academia Treino Corrida - Marinho', 'Short', 'Short Masculino Básico Bermuda Praia Academia Treino Corrida Nada é melhor do que nos sentirmos à vontade nos dias de calor, não é mesmo? Uma bermuda, camiseta folgada e chinelo de dedo então, são uma ótima pedida, não concorda? Para ajuda-lo nessa questão, estamos lançando nossa coleção exclusiva de bermudas. São peças versáteis, que combinam com qualquer outro modelo de roupa. Seu tecido 100% poliéster promove um toque refrescante, te deixando confortável no dia-a-dia. Benefícios: Bem estar, conforto, sem falar no estilo! Material: I 100% poliéster Cores: I Preto I Marinho I Azul I Chumbo I Marrom I Amarelo I Azul Royal Tamanho: I P I M I G I GG\r\n\r\nNome: Short Masculino Básico Bermuda Praia Academia Treino Corrida\r\nGênero: Masculino\r\nDepartamento BS: Esporte\r\nIndicado para: Dia a Dia\r\nModelo: Bermuda Masculina Fitness Lisa Curto Liso\r\nBolso: Externo\r\nMaterial: Poliéster\r\nEstilo da Peça: Lisa\r\nCós: Com elástico e cordão\r\nCategoria: Musculação\r\nComposição: 100% Poliéster', 3, '120.00', 26, 'img-1701725917.jpg'),
(29, 1, 'OCULOS SOLAR RAY-BAN RB4264 601SA158 - Marrom', 'Óculos', 'culos SolarRAY-BAN CHROMANCERB 4264 601SA158RB4264 601-S A1 58 18 145 3PMatte BlackO mais PARECIDO com o JUSTIN GRANDETamanho 58Largura da Lente: 58mmAltura da Lente: 46mm Ponte: 18mm (Distncia entre lentes - nasal)Altura da Armao: 50,3mmLargura da Armao: 145mmcomprimento das hastes: 145mmMade in ItalyProteo Raios UV UVA UVB UVCCategoria 3LENTE CHROMANCE POLARIZADAMenos ReflexosMenos ofuscamentoMaior nitidezMaior conforto visualMaior percepo das cores\r\n\r\nNome: OCULOS SOLAR RAY-BAN RB4264 601SA158\r\nGênero: Unissex\r\nDepartamento BS: Acessórios\r\nIndicado para: Dia a Dia', 4, '1300.00', 24, 'img-1701726088.jpg'),
(30, 2, 'Vestido Feminino Longo Com Fenda Para Festa - Preto', 'Vestido', 'Modelo exclusivo, ACABAMENTO PREMIUM NÃO encolhe NÃO desbota NÃO amassa NÃO torce as costuras NÃO fica transparente NÃO pega pelo e nem bolinha . -Possui forro no Busto . -Disponível em diversas cores EXCLUSIVAS . -Veste Tranquilamente uma pessoa de até 1,75 de altura com salto cobrindo até os pés. . -Um modelo que mostra a que veio, impossível passar despercebida com ele, você se sentirá notada por onde for. . -DICAS PARA FICAR AINDA MAIS PERFEITO Ótimo para compor looks de festas e eventos noturnos, combinação perfeita com salto, tênis branco pode deixar o look mais informal. Excelente para usar com acessórios como colares, que valorizam o busto e colo, brincos, relógios e pulseiras, as cores prata, e dourados são as combinações perfeitas para o preto. -DICA BONUS: Abuse dos acessórios com este modelo, a cor preta dá um ar de sofisticação, e é excelente para todos os tipos de eventos, você pode combinar com um salto, na cor vermelha, e acessórios na mesma cor, como um brinco ou colar de pedra vermelha, para deixar o look muito mais perfeito, aposte no penteado e maquiagem ideal. *Manga e fenda do lado direito do vestido, não possui bojo. *Acessórios e demais itens da foto são apenas sugestão de uso não acompanham vestido. CASO TENHA MAIS ALGUMA DÚVIDA, NÃO HESITE EM NOS PERGUNTAR, ESTAMOS SEMPRE DISPONÍVEIS PARA A JUDAR VOCÊ NA MELHOR ESCOLHA.\r\n\r\nNome: Vestido Feminino Longo Com Fenda Para Festa\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia', 5, '300.00', 22, 'img-1701726430.jpg'),
(31, 2, 'Vestido Jeans Longo Feminino Fenda Manga Curta-82203 - Jeans Claro', 'Vestido', 'Vestido Jeans Longo Feminino Fenda Manga Curta . . Vestido feminino modelo longo confeccionado em tecido jeans. Possui decote v com fechamento por botões, manga curta, fenda frontal, cós elástico, acabamento e costura no tom. . - Produto não acompanha cinto. . O que é Liocel? . Tão confortável quanto o algodão, o liocel é uma fibra extraída da polpa da madeira, sendo uma das fibras mais resistentes e com maior durabilidade. É considerado um tecido ecologicamente correto, pois suas fibras são naturalmente biodegradáveis. . . Informações Adicionais: . Tamanho: P ao GG . Cor: jeans azul claro . Modelo: Vestido Jeans Longo Feminino Fenda Manga Curta . Material: jeans . Detalhes adicionais: jeans, longo, fenda, botões, manga curta . Marca: Cambos Premium . Modelo veste o tamanho: P . Categoria: Moda Feminina - Roupa Feminina - Vestidos - Vestido Longo . 10046933690 . . DICA: . A peça mais versátil que você possa ter no seu guarda roupa é um vestido, devido a sua praticidade na hora da composição de um look! Combina com tudo, para qualquer tipo de ocasião e podendo ser usado em algumas estações do ano. Faça sobreposições com jaqueta de couro, jeans ou até mesmo jaqueta corta vento para dias mais frios. Em dias mais quentes, use tênis e sapatos mais abertos, para que o propósito de conforto e frescor da peça sejam mantidos. . Medidas da Modelo . Altura: 1,66 . Busto: 82cm . Cintura: 64cm . Quadril: 93,5cm . Manequim: 38 .\r\n\r\nNome: Vestido Jeans Longo Feminino Fenda Manga Curta-82203\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia', 4, '200.00', 32, 'img-1701727423.jpg'),
(32, 2, 'Saia Midi Liganete Strong Rovitex Verde - Verde', 'Saia', 'A Saia Midi Rovitex é uma peça feminina e sofisticada, confeccionada em liganete strong, um tecido leve e confortável que valoriza a silhueta feminina. Com um design moderno, a saia possui uma abertura frontal que confere um movimento leve e fluido ao caminhar. Além disso, apresenta um comprimento midi, que é elegante e versátil para diversas ocasiões. A saia é uma peça coringa no guarda-roupa feminino, podendo ser combinada com diferentes tipos de blusas e acessórios. - Medidas - Altura | P: 1,67 à 1,68cm | M: 1,69 à 1,72cm | G: 1,73 à 1,75cm| GG: 1,76 à 1,77cm | G1: 1,67cm | G2: 1,70cm |G3: 1,73cm | G4: 1,76cm - Tórax | P: 86/90cm | M: 91/95cm | G: 96/100cm | GG: 101/105cm | G1: 108cm | G2: 112cm | G3: 116cm | G4: 120cm -Cintura | P: 68/72cm | M: 73/77cm | G: 78/82cm | GG: 82/86cm | G1: 100cm | G2: 104cm | G3: 108cm | G4: 112cm - Quadril | P: 96/100cm | M: 101/105cm | G: 106/110cm | GG: 111/115cm | G1: 118cm | G2: 122cm | G3: 126cm | G4: 132cm\r\n\r\nNome: Saia Midi Liganete Strong Rovitex Verde\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nComposição: PECA TOTAL 5% ELASTANO 95% POLIESTER', 5, '80.00', 8, 'img-1701727524.jpg'),
(33, 2, 'Saia Envelope Longa Transpassada Com Amarração E Fenda e Laço - Preto', 'Saia', 'Saia Envelope em Viscose com Babado: Delicadeza e Conforto em Cada Movimento! Descrição: A nossa Saia Envelope em Viscose com Babado é a escolha perfeita para mulheres que desejam um visual encantador e ao mesmo tempo confortável. Feita com tecido leve e fluido de viscose, essa saia é uma combinação harmoniosa de estilo e praticidade. Características Especiais: Modelo Envelope com Babado: Detalhe charmoso que adiciona um toque de feminilidade ao seu look. Confeccionada em Viscose Premium: Toque suave e caimento perfeito para uma experiência única de conforto. Versatilidade Incrível: Perfeita para diversas ocasiões, desde passeios descontraídos a eventos mais elegantes. Encante-se com a beleza e a fluidez dessa saia, perfeita para combinar com blusas, regatas ou camisas, criando looks versáteis e inspiradores! Destaque-se com Delicadeza e Estilo Eleve sua confiança e presença com a nossa Saia Envelope em Viscose com Babado, seja em festas ou encontros casuais. Liberdade para Expressar sua Beleza Com o babado delicado e o caimento impecável da viscose, essa saia é a escolha certa para mulheres que desejam se destacar com autenticidade e leveza. Conforto e Elegância em Perfeita Harmonia Adquira agora mesmo a sua Saia Envelope em Viscose com Babado e desfrute de uma experiência única de estilo e bem-estar! Aproveite nossa oferta especial por tempo limitado. Entrega rápida e segura para todo o Brasil.\r\n\r\nNome: Saia Envelope Longa Transpassada Com Amarração E Fenda e Laço\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia', 3, '200.00', 34, 'img-1701727609.jpg'),
(34, 2, 'Blusa Feminina Ombro a Ombro Ciganinha - Nude GG Vértice - Preto', 'Camisa', 'Femininas, versáteis e perfeitas para todos os gostos e tipos de corpo. As blusas Vértice são essenciais e o tipo de peça que não fica de fora do closet e do dia a dia de todas as mulheres. Produto Blusa Feminina Ombro a Ombro Ciganinha - Nude Código BLU2001NUD Categoria Blusas Cor Nude Manga Longa Gola Ombro a Ombro Comprimento Não se aplica Gênero Feminino Marca Vértice\r\n\r\nNome: Blusa Feminina Ombro a Ombro Ciganinha - Nude GG Vértice\r\nGênero: Feminino\r\nIndicado para: Dia a Dia', 4, '120.00', 21, 'img-1701727804.jpg'),
(35, 2, 'Blusa Bata Manga Longa Bufante Lisa Com Decote Em V - Preto', 'Camisa', 'Blusa feminina manga longa bufante detalhe na manga - Sabe aquela peça que você se sente livre e confortável ao usar.!? É exatamente assim que você vai se sentir quando vestir pela primeira vez esta peça. A blusa manga longa, com manga bufante é simplesmente perfeita, além de linda, não dá vontade de tirar do corpo. Esta blusa é um modelo super versátil e confortável, é uma super novidade, que você só encontra aqui. Uma peça que simplesmente cai bem com qualquer look. Tanto para os dias mais frios de inverno, como também, para noites frescas, é Moderna e casual, serve tanto para passeios noturnos, como também para o dia a dia de trabalho. VOCÊ VAI SENTIR-SE RADIANTE onde quer que esteja. Disponível nas cores: PRETO, BRANCO, VERMELHO E AZUL. Eu duvido que você vai conseguir escolher uma só. Se eu fosse você aproveitava o preço e levava uma de cada cor. Já pediu as suas?? É confeccionada em tecido de alta qualidade, tem MUITO CONFORTO, e não desbota, então vai estar sempre com cara de roupa nova!! . VAMOS FALAR DESSA PEÇA??? . Composição em Crepe, é super-resistente e confortável Não desbota, não encolhe, e não torce. Tem ótimo caimento e pode compor diversos Looks diferentes. Menina, corre, garanta as suas. São as ULTIFMAS UNIDADES. vai chegar rapidinho, pode confiar. . Aproveita menina! . . E se algo der errado??? . Com a gente o foco é facilidade e simplicidade, então a nossa equipe resolve tudo fácil e bem rapidinho para você. Mas para evitar que aconteça algo errado, consulte sempre a tabela de medidas antes de realizar sua compra, vou colocar ela aqui embaixo pra você. PASSA AQUI EM CASA PRA CONHECER OS NOSSOS PRODUTOS. Clique em “Informações sobre o vendedor”, depois em “ver mais dados deste vendedor” e em seguida, em “mais anúncios do vendedor”, e por último “ver todas” pronto. Chegou!! . Já conhece a gente?? . Nós somos uma empresa com experiência em confecção de moda desde 2004. Já faz um tempinho né?? Nossos produtos passam\r\n\r\nNome: Blusa Bata Manga Longa Bufante Lisa Com Decote Em V\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia', 4, '220.00', 32, 'img-1701728036.jpg'),
(36, 2, 'Moletom Feminino Liso Abrigo Blusa Moleton Casaco com Capuz e Ziper - Preto', 'Moletom', 'BLUSA JAQUETA MOLETOM CANGURU COM CAPUZ , Capuz, mangas longas, barras e punhos elásticos, bolso canguru, forro macio, costuras reforçadas.Nossos moletons são MACIOS E CONFORTÁVEIS com um designer moderno que encaixa perfeitamente no corpo.A blusa ( blusão) de moletom, moletinha, moleton w2 canguru oferece um bom caimento proporcionando um designer exclusivo e moderno.O bolso canguru além de enfatizar o visual vem a oferecer a praticidade em guardar objetos e aquecer as mãos do frio.Para garantir a qualidade da blusa de moletom utilizamos linhas de costuras especiais, além de costuras externas que garantem uma qualidade ainda maior.Nosso casaco lhe garante uma excelente combate contra o frio, com capuz, punho, e bolso canguru.São excelentes para temperaturas mais baixas, já que quebram o vento, e te deixam protegido e confortável.Se encaixa perfeitamente no corpo contendo um design exclusivo, sendo uma ótima fonte térmica.Alta qualidade, não desbota e não deforma.- Costura reforçada para uma ótima durabilidade do produto.- Tecido: 50% Algodão - 50% Poliéster.\r\n\r\nNome: Moletom Feminino Liso Abrigo Blusa Moleton Casaco com Capuz e Ziper\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia', 5, '190.00', 22, 'img-1701728182.jpg'),
(37, 2, 'Calça Jeans Sawary Bootcut Cintura Alta Elastano Feminina - Azul', 'calça', 'A modelagem bootcut com cintura alta confere um estilo casual sofisticado a esta calça jeans feminina Sawary, perfeita para enriquecer suas combinações. A peça tem design liso e barras levemente amplas, ótima pedida para acompanhar desde botas e scarpins até mules e rasteirinhas.\r\n\r\nNome: Calça Jeans Sawary Bootcut Cintura Alta Elastano Feminina\r\nGênero: Feminino\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nEstilo da Peça: Lisa\r\nMaterial: Jeans\r\nBolso: Com bolso\r\nCós: Com passantes\r\nCintura: Cintura Média\r\nFechamento: Com zíper e botão\r\nComposição: 82% Algodão, 16% Poliéster, 2% Elastano\r\nDimensões Aproximadas: Modelo veste 38: Cintura: 72 cm, Comprimento: 114 cm\r\nImportante: Para um melhor ajuste no corpo, recomendamos a compra de um tamanho maior do que o seu usual. Forma Pequena.\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 3, '140.00', 23, 'img-1701728307.jpg'),
(38, 2, 'Oculos de Sol Feminino Luxo Modelo Ana top - Preto', 'Óculos', ' Óculos CoolPandas traz dois tipos de lentes, polarizados e UV400 que oferecem benefícios únicos para os usuários. Os óculos polarizados possuem lentes especialmente tratadas que filtram a luz refletida em superfícies como água, neve e vidro, reduzindo o brilho e melhorando o contraste e a claridade. Eles são ideais para atividades ao ar livre, como pesca, esqui e caminhadas, onde o brilho pode ser um problema. Além disso, os óculos polarizados também podem ajudar a reduzir a fadiga ocular e proteger os olhos contra a luz UV nociva. . Com lentes de proteção UV400, você pode aproveitar seus dias ao sol com total confiança de que seus olhos estão protegidos contra os raios UV prejudiciais. Além disso, as lentes anti-reflexo garantem que você possa ver claramente em todas as condições de iluminação, sem o desconforto do reflexo indesejado. A tecnologia de cores verdadeiras ajuda a manter as cores naturais dos objetos, proporcionando uma experiência visual ainda mais nítida e precisa. Em resumo, os óculos CoolPandas são uma escolha inteligente e elegante para quem deseja proteger seus olhos dos raios solares e adicionar um toque de moda ao seu visual. Com uma variedade de estilos e designs disponíveis, há um par perfeito para cada personalidade e ocasião. Material das lentes: Policarbonato. Material das hastes: Liga metálica. Cor da armação: Tea. Visível taxa de perspectiva: 99%. Gênero: Masculino. Atributo das Lentes: Polarizadas e UV400 (Anti-Reflexo). Adequado para formato: Rosto redondo, rosto longo, quadrado e oval. MEDIDAS:. Frontal: 142 mm. Ponte: 16 mm. Largura: 58 mm. Altura: 50 mm. Haste: 132 mm. Peso: 28 g. Acompanha:. 1 Caixa da CoolPandas. 1 Case CoolPandas. 1 flanela CoolPandas. 1 Cartão de Polarização.\r\n\r\nNome: Oculos de Sol Feminino Luxo Modelo Ana top\r\nGênero: Masculino\r\nDepartamento BS: Acessórios\r\nIndicado para: Dia a Dia', 4, '190.00', 21, 'img-1701728403.jpg'),
(39, 2, 'Brincos de Prata Petite Estrelas Celestiais Brilhantes - Prata', 'Brinco', 'Brincos de Prata Petite Estrelas Celestiais BrilhantesDesign e Qualidade na ConfecçãoO charme doBrincos de Prata Petite Estrelas Celestiais Brilhantes da Sal do Mar, é capaz de encantar todos aqueles que procuram uma joia sofisticada.Nossas coleções possuem desde modelos clássicos e tradicionais, até modelos mais modernos e detalhados, nossa linha de Brincos de Prata, representa todo o amor dos mais apaixonados, assim como oBrincos de Prata Petite Estrelas Celestiais Brilhantes.Modo de Envio e Garantias ExclusivasAsseguramos nossos pedidos entregues de maneira segura via Correios ou Transportadora.Nós oferecemos garantia de pureza do material, prata 925.Prazo de Expedição e Envio da sua JoiaPrazo de Expedição:2Dias Úteis *Prazo de Envio:2Dias Úteis para a Expedição + Prazo de Entrega dos CorreiosConforme Selecionado no Ato do Fechamento do Pedido*Dimensões e Especificações da JoiaMaterial: PrataPureza: Prata 925Cor: PrataDetalhes: Brincos de Prata Petite Estrelas Celestiais Brilhantes*Medidas Aproximadas\r\n\r\nNome: Brincos de Prata Petite Estrelas Celestiais Brilhantes\r\nGênero: Unissex\r\nTipo: Brinco\r\nIndicado para: Dia a Dia\r\nDepartamento BS: Acessórios', 4, '180.00', 37, 'img-1701728523.jpg'),
(40, 3, 'Macacão Proteção UV + Chapéu Praia Piscina Infantil Bebe Menino - Azul', 'Macaquinho', 'MACACÃO PROTEÇÃO UV + CHAPEU BEBÊ PRAIA PISCINA Disponível do tamanho P ao 03 Acompanha o chapéu Proteção UV solar 50+ Medidas: P -3 meses M - 3-6 meses G - 6-9 meses 01 - 9-12 meses 02 - 12-18 meses 03 - 18-24 meses\r\n\r\nNome: Macacão Proteção UV + Chapéu Praia Piscina Infantil Bebe Menino\r\nGênero: Masculino\r\nDepartamento BS: Moda Praia\r\nIndicado para: Dia a Dia', 5, '110.00', 24, 'img-1701729238.jpg'),
(41, 3, 'Pijama Infantil Macacão Kyly Soft Quentinho Estampado Menina - Marinho', 'Pijama', 'O Pijama Infantil Macacão Kyly Soft Quentinho Estampado Menina para uma excelente noite de sono. Com design moderno, elaborado em malha de algodão, oferece maciez e máximo estilo, além de ser aquele must have para deixar as pequenas repletas de conforto e bem-estar. Invista!\r\n\r\nNome: Pijama Infantil Macacão Kyly Soft Quentinho Estampado Menina\r\nGênero: Menina\r\nDepartamento BS: Lingerie\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nEstilo da Peça: Estampada\r\nManga: Manga Longa\r\nMaterial: Poliéster\r\nFechamento: Com botão\r\nComposição: 100% Poliéster\r\nDimensões Aproximadas: Ombro: 29 cm, Busto: 64 cm, Comprimento: 67 cm\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 4, '120.00', 12, 'img-1701729359.jpg'),
(42, 3, 'Macacão Infantil Manga Longa Kyly Carneirinho Menina - Rosa', 'Macaquinho', 'O Macacão Infantil Manga Longa Kyly Carneirinho leva diversão e conforto para a hora do soninho! Perfeito para aquecer seus filhos em dias de temperatura amena, o pijama confeccionado em algodão possui modelagem macacão, gola redonda, fechamento entrepernas em botões de pressão, pés abertos e estrutura com a aplicação de pelúcia em formato de carneirinho. Não perca tempo, leve já!\r\n\r\nNome: Macacão Infantil Manga Longa Kyly Carneirinho Menina\r\nGênero: Menina\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nEstilo da Peça: Estampada\r\nFechamento: Com botão\r\nManga: Manga Longa\r\nModelagem: Macacão Longo\r\nMaterial: Algodão\r\nComposição: 100% Algodão\r\nGarantia do Fabricante: Contra defeito de fabricação.\r\nOrigem: Nacional', 4, '90.00', 12, 'img-1701729454.jpg'),
(43, 3, 'Pijama Infantil Macacão Kyly Soft Quentinho Estampado Menina - Rosa', 'Pijama', 'O Pijama Infantil Macacão Kyly Soft Quentinho Estampado Menina para uma excelente noite de sono. Com design moderno, elaborado em malha de algodão, oferece maciez e máximo estilo, além de ser aquele must have para deixar as pequenas repletas de conforto e bem-estar. Invista!\r\n\r\nNome: Pijama Infantil Macacão Kyly Soft Quentinho Estampado Menina\r\nGênero: Menina\r\nDepartamento BS: Lingerie\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nEstilo da Peça: Estampada\r\nManga: Manga Longa\r\nMaterial: Poliéster\r\nFechamento: Com botão\r\nComposição: 100% Poliéster\r\nDimensões Aproximadas: Ombro: 29 cm, Busto: 64 cm, Comprimento: 67 cm\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 5, '130.00', 20, 'img-1701729551.jpg'),
(44, 3, 'MOLETOM INFANTIL MENINO MENINA COM CAPUZ E BOLSO PERSONAGENS - Vermelho', 'Moletom', 'Descubra a nossa encantadora Blusa Moletom Infantil com Bolso Canguru e Estampas de Personagens, uma peça indispensável para os pequenos aventureiros. Unindo estilo, conforto e praticidade, esse moletom é perfeito para manter as crianças aquecidas e cheias de charme durante o inverno, seja na escola, em passeios, nas férias ou em festinhas. Fabricada com materiais de alta qualidade, essa blusa garante durabilidade e resistência, aguentando as brincadeiras mais animadas. Seu bolso canguru na frente é ideal para guardar pequenos tesouros e manter as mãozinhas aquecidas nos dias mais frios. Com estampas cativantes de personagens adorados, essa blusa desperta a imaginação e o amor pelas histórias favoritas das crianças. Temos uma variedade encantadora de estampas disponíveis, perfeitas para usar na escola, em passeios, nas férias ou até mesmo como pijama ou em festinhas temáticas. Além do estilo, a Blusa Moletom Infantil foi projetada com o conforto dos pequenos em mente. Seu tecido flanelado macio e aconchegante proporciona uma sensação agradável ao toque, mantendo a temperatura corporal ideal. Com mangas compridas e capuz forrado, ela oferece proteção adicional contra o vento gelado, tornando-a a escolha perfeita para qualquer ocasião, desde um dia na escola até uma festinha especial. Versátil e charmosa, essa blusa pode ser combinada com calças jeans, leggings ou saias para criar looks incríveis e cheios de personalidade. Seja na escola, em passeios, nas férias ou em festas, nossa Blusa Moletom Infantil é a escolha certa! Não perca a oportunidade de presentear os pequenos com uma peça encantadora e versátil, perfeita para usar na escola, em passeios, nas férias ou em festinhas temáticas. Aqui você encontrará a Blusa de alta qualidade. Prepare as crianças para enfrentar todas as aventuras com estilo e conforto! MEDIDAS = Tamanho 04: LARGURA 39-78 ALTURA 45 MANGA 36 _ Tamanho 06: LARGURA 43-86 ALTURA 46 MANGA 42 _ Tamanho 08: LARGURA 45-90 ALTURA 52 MANGA 47 _ Tamanho 10: LARGURA 46-92 ALTURA 57 MANGA 51 _ Tamanho 12: LARGURA 52-104 ALTURA 58 MANGA 55 _ Tamanho 14: LARGURA 54-108 ALTURA 62 MANGA 58 Invista em qualidade, conforto e estilo. Encomende a sua agora e deixe seu pequeno preparado para enfrentar o inverno com muito charme e proteção. Não deixe o frio te pegar de surpresa, escolha a melhor opção para se mante-lo aquecido e estiloso nesta estação!\r\n\r\nNome: MOLETOM INFANTIL MENINO MENINA COM CAPUZ E BOLSO PERSONAGENS\r\nGênero: Unissex\r\nDepartamento BS: Roupas\r\nComplemento da Descrição 1: Moletom infantil, Menino, Menina, Roupa infantil menina, Roupa infantil menino, Moleton infantil, Moletom menina, Moletom menino, Blusa moletom infantil, Blusa de frio infantil, Personagens, Pijama infantil, Escolar, Festa, Inverno, Presente, Kids\r\nIndicado para: Dia a Dia\r\nEstilo da Peça: Estampada\r\nTipo: Moletom\r\nOcasião: Dia a Dia\r\nCapuz: Com Capuz\r\nMaterial: Algodão\r\nBolso: Canguru\r\nAdicionais: Super Mario\r\nComposição: 50% Algodão 50% Poliéster\r\nGarantia do Fabricante: 30 dias', 3, '200.00', 32, 'img-1701729795.jpg'),
(45, 3, 'Blusa Moletom Infantil Liso com Capuz e bolso Canguru - Rosa', 'Moletom', 'Descubra a nossa encantadora Blusa Moletom Infantil com Bolso Canguru e Estampas de Personagens, uma peça indispensável para os pequenos aventureiros. Unindo estilo, conforto e praticidade, esse moletom é perfeito para manter as crianças aquecidas e cheias de charme durante o inverno, seja na escola, em passeios, nas férias ou em festinhas. Fabricada com materiais de alta qualidade, essa blusa garante durabilidade e resistência, aguentando as brincadeiras mais animadas. Seu bolso canguru na frente é ideal para guardar pequenos tesouros e manter as mãozinhas aquecidas nos dias mais frios. Com estampas cativantes de personagens adorados, essa blusa desperta a imaginação e o amor pelas histórias favoritas das crianças. Temos uma variedade encantadora de estampas disponíveis, perfeitas para usar na escola, em passeios, nas férias ou até mesmo como pijama ou em festinhas temáticas. Além do estilo, a Blusa Moletom Infantil foi projetada com o conforto dos pequenos em mente. Seu tecido flanelado macio e aconchegante proporciona uma sensação agradável ao toque, mantendo a temperatura corporal ideal. Com mangas compridas e capuz, ela oferece proteção adicional contra o vento gelado, tornando-a a escolha perfeita para qualquer ocasião, desde um dia na escola até uma festinha especial. Versátil e charmosa, essa blusa pode ser combinada com calças jeans, leggings ou saias para criar looks incríveis e cheios de personalidade. Seja na escola, em passeios, nas férias ou em festas, nossa Blusa Moletom Infantil é a escolha certa! . Prepare as crianças para enfrentar todas as aventuras com estilo e conforto!\r\n\r\nNome: Blusa Moletom Infantil Liso com Capuz e bolso Canguru\r\nGênero: Unissex\r\nDepartamento BS: Roupas\r\nIndicado para: Dia a Dia\r\nEstilo da Peça: Lisa\r\nOcasião: Dia a Dia\r\nCapuz: Com Capuz\r\nMaterial: Algodão\r\nBolso: Canguru\r\nComposição: 75% Algodão 25% Políester\r\nGarantia do Fabricante: 30 dias', 4, '200.00', 32, 'img-1701729899.jpg'),
(46, 3, 'Tênis Iinfantil Pampili Gloss Menina - Preto+Branco', 'Tenis', 'Produção fashion garantida para as meninas! Inspirado nos clássicos dos anos 90, o Tênis Iinfantil Pampili Gloss é aposta certa para acompanhar as aventuras da sua pequena. Confeccionado em material resistente, tem solado emborrachado, palmilha macia, forro interno e fechamento ajustável com calce fácil. Exibe design moderno com acabamento multi color. Dica: aposte em combinações com lookinhos casuais ou festivos - com saia infantil, conjunto infantil, vestido infantil, calça legging infantil ou calça jeans infantil. Sua menina sempre na moda!\r\n\r\nNome: Tênis Iinfantil Pampili Gloss Menina\r\nGênero: Menina\r\nDepartamento BS: Calçados\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nAltura do Cano: Cano Baixo\r\nMaterial: Sintético\r\nMaterial Interno: Têxtil\r\nPeso do Produto: 200 g (O peso do produto varia de acordo com a numeração)\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 4, '250.00', 32, 'img-1701729995.jpg'),
(47, 3, 'Tênis Infantil Batatinha Led Menino - Preto+Vermelho', 'Tenis', 'As aventuras do seu pequeno vão ficar ainda mais divertidas com o Tênis Infantil Batatinha. Confeccionado em material sintético, tem solado de borracha com led e modelagem em calce fácil. Combine com produções casuais. Conforto e estilo garantido!\r\n\r\nNome: Tênis Infantil Batatinha Led Menino\r\nGênero: Bebê Menino\r\nImportante: Com led\r\nDepartamento BS: Calçados\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nAltura do Cano: Cano Baixo\r\nMaterial: Têxtil\r\nMaterial Interno: Têxtil\r\nPeso do Produto: 141 g (O peso do produto varia de acordo com a numeração)\r\nGarantia do Fabricante: Contra defeito de fabricação\r\nOrigem: Nacional', 3, '230.00', 23, 'img-1701730088.jpg'),
(48, 3, 'Touca Infantil Grosso Com Protetor Orelha Bichinho Forrada Inverno Proteção Frio - Verde', 'Boné', 'tamanho único:serve para crianças de 3 a 10 anos;OBSERVAÇÕES:- Será enviado modelo de menina ou menino;- Caso queira alguma touca específica informar por mensagem privada após a compra; - Tire todas as dúvidas antes de comprar, PERGUNTE!\r\n\r\nNome: Touca Infantil Grosso Com Protetor Orelha Bichinho Forrada Inverno Proteção Frio\r\nGênero: Unissex\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nDepartamento BS: Acessórios', 2, '200.00', 34, 'img-1701730250.jpg'),
(49, 3, 'Touca Infantil Grosso Com Protetor Orelha Bichinho Forrada Inverno Proteção Frio - Pink', 'Boné', 'tamanho único:serve para crianças de 3 a 10 anos;OBSERVAÇÕES:- Será enviado modelo de menina ou menino;- Caso queira alguma touca específica informar por mensagem privada após a compra; - Tire todas as dúvidas antes de comprar, PERGUNTE!\r\n\r\nNome: Touca Infantil Grosso Com Protetor Orelha Bichinho Forrada Inverno Proteção Frio\r\nGênero: Unissex\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nDepartamento BS: Acessórios', 1, '200.00', 34, 'img-1701730363.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idV` int(11) NOT NULL,
  `idC` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `valorP` int(11) NOT NULL,
  `dataV` date NOT NULL,
  `horaV` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD PRIMARY KEY (`idCar`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idC`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`CTcod`);

--
-- Índices para tabela `tabela_produto`
--
ALTER TABLE `tabela_produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idV`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  MODIFY `idCar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `CTcod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tabela_produto`
--
ALTER TABLE `tabela_produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

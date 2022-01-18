--
-- Banco de dados: `colecao`
--

-- --------------------------------------------------------

-- Estrutura da tabela `albuns`

CREATE TABLE `albuns` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `banda` varchar(200) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `capa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Índices para tabela `albuns`

ALTER TABLE `albuns`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT de tabela `albuns`

ALTER TABLE `albuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
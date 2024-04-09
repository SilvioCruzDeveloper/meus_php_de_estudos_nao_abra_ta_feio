<?php
$dataNascimentoProfessor = DateTime::createFromFormat('Y-m-d', '1986-12-12');

// Adicionando um horário à data de nascimento
$dataNascimentoProfessor->setTime(10, 30, 0); // Define o horário para 10:30:00

// Agora você pode imprimir a data e hora completa em formato brasileiro
echo $dataNascimentoProfessor->format('d/m/Y H:i:s'); // Saída: 12/12/1986 10:30:00
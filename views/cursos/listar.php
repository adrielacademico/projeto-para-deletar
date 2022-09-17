<div class="alert alert-warning">
    <h3>Lista de Cursos</h3>
</div>

<table class="table table-bordered">
  <tr class="bg-light">
    <th>Id</th>
    <th>Nome</th>
    <th>Horário</th>
    <th>Data Início</th>
    <th>Data Conclusão</th>
    <th>Descrição</th>
    <th>Ativo</th>
    <th>Ações</th>
  </tr>

  <?php foreach($cursos as $curso) : ?>

    <tr>
      <td><?= $curso->getId() ?></td>
      <td><?= $curso->getNome() ?></td>
      <td><?= $curso->getHorario() ?></td>
      <td><?= $curso->getData_inicio() ?></td>
      <td><?= $curso->getData_conclusao() ?></td>
      <td><?= $curso->getDescricao() ?></td>
      <td><?= $curso->getAtivo() ?></td>
      <td>Editar | Excluir</td>
    </tr>

  <?php endforeach; ?>

</table>
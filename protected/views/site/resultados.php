<?php
/* @var $this SiteController */
/* @var $emps Array */
?>

<br/><div class="ui inverted blue large menu">
    <a href="index.php" class="item">
        <i class="home icon"></i> Inicio
    </a>
    <a href="?r=site/basica" class="active item">
        <i class="mail icon"></i> Consulta Simple
    </a>
    <a href="?r=site/media" class="item">
        <i class="mail icon"></i> Consulta Media
    </a>
    <a href="?r=site/avanzada" class="item">
        <i class="mail icon"></i> Consulta Avanzada
    </a>
</div>

<table class="ui table">
  <thead>
    <tr>
        <th>Emp_no</th>
        <th>birth_date</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>gender</th>
        <th>hire_date</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($emps as $emp): ?>
      <tr>
          <td><?php echo $emp['emp_no'] ?></td>
          <td><?php echo $emp['birth_date'] ?></td>
          <td><?php echo $emp['first_name'] ?></td>
          <td><?php echo $emp['last_name'] ?></td>
          <td><?php echo $emp['gender'] ?></td>
          <td><?php echo $emp['hire_date'] ?></td>
      </tr>
  <?php endforeach ?>

  </tbody>
</table>

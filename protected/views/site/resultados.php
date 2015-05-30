<?php
/* @var $this SiteController */
/* @var $emps Array */
?>

<br/>

<div>
    <a href="index.php">
        Inicio
    </a><br/>
    <a href="?r=site/basica">
        Consulta Simple
    </a><br/>
    <a href="?r=site/media">
        Consulta Media
    </a><br/>
    <a href="?r=site/avanzada">
        Consulta Avanzada
    </a><br/>
</div>

<table>
  <thead>
    <tr>
        <th>emp_no</th>
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

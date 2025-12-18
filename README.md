<h1>Decisiones de Diseño</h1>

<h2>1. Tabla: Vehículo</h2>

<p><strong>Nombre de la tabla:</strong> <code>vehiculos</code></p>

<h3>Campos</h3>

<table>
  <thead>
    <tr>
      <th>Campo</th>
      <th>Tipo</th>
      <th>¿Obligatorio?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>id</code></td>
      <td>bigIncrements</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>placa</code></td>
      <td>string</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>tipo</code></td>
      <td>string</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>propietario</code></td>
      <td>string</td>
      <td>No</td>
    </tr>
    <tr>
      <td><code>observacion</code></td>
      <td>string</td>
      <td>No</td>
    </tr>
    <tr>
      <td><code>salio</code></td>
      <td>boolean</td>
      <td>No</td>
    </tr>
    <tr>
      <td><code>created_at</code></td>
      <td>timestamps</td>
      <td>No</td>
    </tr>
  </tbody>
</table>

<h2>2. Tipos de Vehículo</h2>

<p>El sistema maneja los siguientes tipos de vehículo:</p>

<ul>
  <li>Automóvil</li>
  <li>Motocicleta</li>
  <li>Camioneta</li>
</ul>

<h2>3. Eliminación de Registros</h2>

<p>
Sí es posible eliminar registros bajo ciertas condiciones:
</p>

<ul>
  <li>
    Si se registra un vehículo que nunca ingresó al parqueadero,
    el registro puede eliminarse para evitar inconsistencias de información.
  </li>
  <li>
    No se debe eliminar un vehículo que ya haya salido del parqueadero.
  </li>
  <li>
    Para controlar este comportamiento, se incluye el campo
    <code>salio</code> en la tabla, el cual permite identificar
    si el vehículo ya salió o no.
  </li>
</ul>

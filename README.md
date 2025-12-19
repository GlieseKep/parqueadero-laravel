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
      <td><code>estado</code></td>
      <td>string</td>
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
Sí, ya que si hipotéticamente se llega a registrar un vehículo que nunca entro se debería de poder borrarlo del registro para que no haya inconsistencia de información. Pero no se debería de borrar si el vehículo ya salio, por lo que se le agregó a la tabla un campo para identificar si ya salio o no.
</p>


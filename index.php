<html>
  <head>
    <title>PHP Test</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">
  <h1>Panaderia Juancho</h1>
  <div class="underline">
  </div>
  <form action="action.php" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Mi nombre es" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="Mi Correo es" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="Mi numero es" name="telephone" id="telephone_input" required>
    </div>
    <div class="Pan">
      <label for="Pan"></label>
      <select placeholder="Tipo de Pan" name="Pan" id="subject_input" required>
        <option>Tipo de Pan</option>
        <option>Concha</option>
        <option>Cuernitos</option>
        <option>Dona</option>
      </select>
    </div>
    <div class="message">
          <label for="Direccion"></label>
      <input type="text" placeholder="Direccion" name="dire" id="dire" required>
      </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="Deja tu mensaje" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
  </form>
</div>
  </body>
</html>
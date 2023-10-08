
<form  action="/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>

    <div>
      <label  for="prénom">Prénom :</label>
      <input  type="text"  id="prénom"  name="user-prénom">
    </div>
    <div>
      <label  for="email">E-mail :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
      <label  for="télephone">Téléphone :</label>
        <input  type="tel"  id="téléphone"  name="user-téléphone">
    </div>
    <div>
      <label  for="sujet">Sujet :</label>
        <select  id="sujet"  name="user-sujet">
            <option value="demande d'information">demande d'information</option>
            <option value="demande de rdv">demande de rdv</option>
            <option value="demande de devis">demande de devis</option>
        </select>
        </div>
   
    <div>
      <label  for="message">Message :</label>
        
      <textarea  id="message"  name="user_message"></textarea>
    </div>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  
  
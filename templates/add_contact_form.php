<form action="add_contact.php" method="post">
        Name
            <input autofocus class="form-control" name="first" placeholder="First Name" type="text"/><br>
            <input autofocus  class="form-control" name="last" placeholder="Last Name" type="text"/><br>
        Cell
            <input autofocus class="form-control" name="cell" placeholder="(###)-###-####" type="text"/><br>
        Home
            <input autofocus class="form-control" name="home" placeholder="(###)-###-####" type="text"/><br>
        Parent 1 <br> 
            <input autofocus  class="form-control" name="p1c" placeholder="Cell (###)-###-####" type="text"/><br>
            <input autofocus class="form-control" name="p1n" placeholder="Name" type="text"/><br>
        Parent 2 
            <input autofocus class="form-control" name="p2c" placeholder="Cell (###)-###-####" type="text"/><br>
            <input autofocus class="form-control" name="p2n" placeholder="Name" type="text"/><br>
        If I can't reach you, who should I call next?<br>
            <input type="hidden" name="next" value="0"/>
            <input class="form-control" name="next" type="radio" value="Home"/>Home</br>
            <input class="form-control" name="next" type="radio" value="Parent 1"/>Parent 1</br>
            <input class="form-control" name="next" type="radio" value="Parent 2"/>Parent 2
        <button class="form-control" type="submit" class="btn btn-default">Submit</button>
</form>

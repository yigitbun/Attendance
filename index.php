    <?php
    $title = 'Index';
    require_once 'includes/header.php';
    ?>
    <!-- 
        - First name
        - Last name
        - Date of Birth (Use DatePicker)
        - Specialty (Databse Admin, Software Developer, Web Administrator, Other)
        - Email Adress
        - Contact Number
     -->

    <h1 class="text-center">Registration for IT Conference</h1>

    <form>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-control" id="specialty">
                <option>Databse Admin</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php require_once 'includes/footer.php'; ?>
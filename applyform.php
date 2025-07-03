<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <h2 class="text-center">Admission Open 2025</h2>
    <form id="leadForm">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input class="form-control" type="text" placeholder="Enter Your Name" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input class="form-control" type="email" placeholder="Enter Your Email" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Number</label>
            <input class="form-control" type="email" placeholder="Enter Your Number" name="mobile">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Select Course</label>
            <select class="form-select" aria-label="Default select example" name="Course">
                <option selected>Select the course</option>
                <option value="Bachelor of Medical Radio Diagnosis And Imaging Technology (BMRIT)">Bachelor of Medical Radio Diagnosis And Imaging Technology (BMRIT)</option>
                <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                <option value="Bachelor of Science in Optometry (BSc Optometry)">Bachelor of Science in Optometry (BSc Optometry)</option>
                <option value="Bachelor of Operation Theatre Technology (BOTT)">Bachelor of Operation Theatre Technology (BOTT)</option>
                <option value="Bachelor of Science in Nursing (BSc Nursing)">Bachelor of Science in Nursing (BSc Nursing)</option>
                <option value="Bachelor of Medical Laboratory Technology (BMLT)">Bachelor of Medical Laboratory Technology (BMLT)</option>
                <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
                <option value="Master of Hospital Administration (MHA)">Master of Hospital Administration (MHA)</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary col-lg-12">Submit</button>
    </form>
</main>
<script>
        $(document).ready(function() {
          $('#submit').on('click', function(e) {
            e.preventDefault();
            const formData = $('#leadForm').serialize();
            $.ajax({
              url: 'apply.php', // your PHP API
              type: 'POST',
              data: formData,
              success: function(response) {
                alert("Form submitted successfully!");
                console.log("Response:", response);
                $('#leadForm')[0].reset(); // clear form
              },
              error: function(xhr, status, error) {
                alert("Error occurred while submitting.");
                console.log("Error:", error);
              }
            });
          });
        });
      </script>
</body>
</html>
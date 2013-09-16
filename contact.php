<?php include('inc/header.php'); ?>

<section class="contact">
  <div class="row-content">
    <h2>Contact Us</h2> 
    <div class="information">
      <form name="htmlform" method="post" action="toyousender.php">
        <div>
          <label>Name</label>
          <input type="text" name="first_name" placeholder="Name" required>
        </div>
        <div>
          <label>Email</label>
          <input  type="email" name="email" placeholder="Email" required>
        </div>
        <div>
          <label>Message</label>
          <textarea name="comments" placeholder="Message" required ></textarea>
          <button name="send" type="submit" class="submit">SEND</button>
        </div>
      </form>
    </div>
    <div class="map">
      <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1001+Fifth+Avenue,+Pittsburgh,+PA&amp;aq=0&amp;oq=1001+Fifth+Avenue&amp;sll=41.117935,-77.604698&amp;sspn=5.412206,11.634521&amp;ie=UTF8&amp;hq=&amp;hnear=1001+Fifth+Ave,+Pittsburgh,+Allegheny,+Pennsylvania+15219&amp;t=m&amp;z=14&amp;ll=40.438847,-79.990855&amp;iwloc=near&amp;output=embed"></iframe>
    </div>
  </div>
</section>

<?php include('inc/footer.php'); ?>

</body>
</html>

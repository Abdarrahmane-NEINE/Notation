<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
		<title>Notification avec PHP / Ajax</title>
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
            <form name="myForm" action="traitement.php" method="post" id="comment_form" >
              <div class="form-group">
                <label for="user">User</label>
                <input type="text" id="IdentificationUser" name="user"  class="form-control">
              </div>
            	<div class="form-group">
            		<labelb for="Notification">Notation</label>
                <div class="stars">
                  <i class="lar la-star" data-value="1"></i>
                  <i class="lar la-star" data-value="2"></i>
                  <i class="lar la-star" data-value="3"></i>
                  <i class="lar la-star" data-value="4"></i>
                  <i class="lar la-star" data-value="5"></i>
                </div>
                <input type="hidden" name="Notification" id="note" value= "0">
            	</div>
              <div class="form-group">
                <label for="comment">Commentaire</label>
                <textarea type="text" id="Commentaire" name="comment"  class="form-control" rows="3" cols="2"></textarea>
								<p><span class="error"  id="errorname"></span></p>
              </div>
              <div class="form-group">
                <input type="submit" name="envoyer" id="envoyer" class="btn btn-info" value="envoyer"/>
              </div>
            </form>
        </div>
        <script type="text/javascript" src="script.js"></script>
				<script src="jquery-3.6.0.js"></script>
    </body>
</html>

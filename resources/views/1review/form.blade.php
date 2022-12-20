<form action="/transactions" method="POST">
    @csrf
        <label>Rating:</label>
        <div>
            <div class="rate" style="padding:0 3cm 0 3cm; ">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
        </div>
        <div class="form-group">
            <label for="msg">Review:</label>
            <textarea class="form-control" id="msg" rows="10" placeholder="How would you decribe the service? How was the experience?" name="msg"></textarea>
        </div>
        
        <div class="sidebar-widget follow mb-5 text-center">
            <br><button type="submit" class="btn btn-primary">Finish Rating</button>
        </div>
        
</form>
  
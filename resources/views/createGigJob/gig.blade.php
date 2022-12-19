<form>
    <div class="form-group">
      <label for="exampleInputText1">Title of the Gig:</label>
      <input type="text" class="form-control" id="exampleInputText1" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Describe what you offer in this Gig. Talents, Skills etc."></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputText2">Skills:</label>
      <input type="text" class="form-control" id="exampleInputText2" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category:</label><br>
      <select class="form-control col-3" id="exampleFormControlSelect1">
        <option>Category1</option>
        <option>Category2</option>
        <option>Category3</option>
        <option>Category4</option>
        <option>Category5</option>
      </select>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="budget">Budget:</label>
        <input type="number" class="form-control col-7" id="quantity" name="budget" placeholder="000"><br>
      </div>
      <div class="form_group">
        <label for="days">Required Days:</label>
        <input type="number" class="form-control col-7" id="quantity" name="days" placeholder="00"><br>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
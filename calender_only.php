

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Innovation for the future.inc</title>
    <link rel="stylesheet" href="calender_only.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="header-left">BarBar</div>
      <div class="header-right">
        <ul>
          <li><a href="index.html">TOPページへ</a></li>
          <li>営業時間　9:00～18:00</li>
          <li>定休日：毎週月曜 第2・第4火曜</li>
        </ul>
      </div>
    </div>

    <div class="main">
      <div class="contact-form">
        <div class="form-title">ご予約申し込みフォーム</div>
         <form id="calender" method="post" action="time_only.php">

　　      <h2>ご希望日</h2>

          <div  id="first" class="calender_table">
            <h1 class="month" name="month">１０月<a class="next" href="calender_next.php">次月</a></h1>
            <input type="hidden" name="month" value="10">
             <div class="week_line">

               <div class= day>日</div>
               <div class= day>月</div>
               <div class= day>火</div>
               <div class= day>水</div>
               <div class= day>木</div>
               <div class= day>金</div>
               <div class= day>土</div>
             </div>

             <div class="week_line">
               <input type="radio" name="day" value="" id="day1" required>
               <label for="day1" class="day"> </label>
               <input type="radio" name="day" value="" id="day2" required>
               <label for="day2" class="day"> </label>
               <input type="radio" name="day" value="" id="day3" required>
               <label for="day3" class="day"> </label>
               <input type="radio" name="day" value="" id="day4" required>
               <label for="day4" class="day"> </label>
               <input type="radio" name="day" value="1" id="day5" required>
               <label for="day5" class="day">1</label>
               <input type="radio" name="day" value="2" id="day6" required>
               <label for="day6" class="day">2</label>
               <input type="radio" name="day" value="3" id="day7"required>
               <label for="day7" class="day">3</label>
             </div>

             <div class="week_line">
               <input type="radio" name="day" value="4" id="day8" required>
               <label for="day8" class="day">4</label>
               <input type="radio" name="day" value="5" id="day9" required>
               <label for="day9" class="day">5</label>
               <input type="radio" name="day" value="6" id="day10" required>
               <label for="day10" class="day">6</label>
               <input type="radio" name="day" value="7" id="day11" required>
               <label for="day11" class="day">7</label>
               <input type="radio" name="day" value="8" id="day12" required>
               <label for="day12" class="day">8</label>
               <input type="radio" name="day" value="9" id="day13" required>
               <label for="day13" class="day">9</label>
               <input type="radio" name="day" value="10" id="day14 required">
               <label for="day14" class="day">10</label>
             </div>

             <div class="week_line">
               <input type="radio" name="day" value="11" id="day15" required>
               <label for="day15" class="day">11</label>
               <input type="radio" name="day" value="12" id="day16" required>
               <label for="day16" class="day">12</label>
               <input type="radio" name="day" value="13" id="day17" required>
               <label for="day17" class="day">13</label>
               <input type="radio" name="day" value="14" id="day18" required>
               <label for="day18" class="day">14</label>
               <input type="radio" name="day" value="15" id="day19" required>
               <label for="day19" class="day">15</label>
               <input type="radio" name="day" value="16" id="day20" required>
               <label for="day20" class="day">16</label>
               <input type="radio" name="day" value="17" id="day21" required>
               <label for="day21" class="day">17</label>
             </div>

             <div class="week_line">
               <input type="radio" name="day" value="18" id="day22" required>
               <label for="day22" class="day">18</label>
               <input type="radio" name="day" value="19" id="day23" required>
               <label for="day23" class="day">19</label>
               <input type="radio" name="day" value="20" id="day24" required>
               <label for="day24" class="day">21</label>
               <input type="radio" name="day" value="21" id="day25" required>
               <label for="day25" class="day">21</label>
               <input type="radio" name="day" value="22" id="day26" required>
               <label for="day26" class="day">22</label>
               <input type="radio" name="day" value="23" id="day27" required>
               <label for="day27" class="day">23</label>
               <input type="radio" name="day" value="24" id="day28" required>
               <label for="day28" class="day">24</label>
             </div>

             <div class="week_line">
               <input type="radio" name="day" value="25" id="day29" required>
               <label for="day29" class="day">25</label>
               <input type="radio" name="day" value="26" id="day30" required>
               <label for="day30" class="day">26</label>
               <input type="radio" name="day" value="27" id="day31" required>
               <label for="day31" class="day">27</label>
               <input type="radio" name="day" value="28" id="day32" required>
               <label for="day32" class="day">28</label>
               <input type="radio" name="day" value="29" id="day33" required>
               <label for="day33" class="day">29</label>
               <input type="radio" name="day" value="30" id="day34" required>
               <label for="day34" class="day">30</label>
               <input type="radio" name="day" value="31" id="day35" required>
               <label for="day35" class="day">31</label>
             </div>
           </div>
  </div>
    <div class="for">
    <input id="submit" type="submit" value="タイムテーブルへ" />
    </div>
    </form>

  </div>
</div>

  <div class="footer">
    <div class="footer-logo">BarBar</div>
    <div class="footer-right">
      <ul>
        <li><a href="index.html">TOPページへ</a></li>
        <li>営業時間　9:00～18:00</li>
        <li>定休日：毎週月曜 第2・第4火曜</li>
      </ul>
    </div>
      <div class="footer-list">
          <ul>
            <li>電話：06-6436-××××</li>
            <li>住所：尼崎市武庫之荘　　</li>
          </ul>
      </div>
  </div>

  </html>

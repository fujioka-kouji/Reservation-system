

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
         <form id="calender2" method="post" action="time_only.php">

　　      <h2>ご希望日</h2>

           <div  id="next" class="calender_table">
             <h1 class="month" name="month">１１月<a class="next" href="calender_only.php">戻る</a></h1>
             <input type="hidden" name="month" value="11">
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
                <input type="radio" name="day" value="1" id="day36" required>
                <label for="day36" class="day"> 1</label>
                <input type="radio" name="day" value="2" id="day37" required>
                <label for="day37" class="day">2 </label>
                <input type="radio" name="day" value="3" id="day38" required>
                <label for="day38" class="day">3 </label>
                <input type="radio" name="day" value="4" id="day39" required>
                <label for="day39" class="day">4 </label>
                <input type="radio" name="day" value="5" id="day40" required>
                <label for="day40" class="day">5</label>
                <input type="radio" name="day" value="6" id="day41" required>
                <label for="day41" class="day">6</label>
                <input type="radio" name="day" value="7" id="day42" required>
                <label for="day42" class="day">7</label>
              </div>

              <div class="week_line">
                <input type="radio" name="day" value="8" id="day43" required>
                <label for="day43" class="day">8</label>
                <input type="radio" name="day" value="9" id="day44" required>
                <label for="day44" class="day">9</label>
                <input type="radio" name="day" value="10" id="day45" required>
                <label for="day45" class="day">10</label>
                <input type="radio" name="day" value="11" id="day46" required>
                <label for="day46" class="day">11</label>
                <input type="radio" name="day" value="12" id="day47" required>
                <label for="day47" class="day">12</label>
                <input type="radio" name="day" value="13" id="day48" required>
                <label for="day48" class="day">13</label>
                <input type="radio" name="day" value="14" id="day49" required>
                <label for="day49" class="day">14</label>
              </div>

              <div class="week_line">
                <input type="radio" name="day" value="15" id="day50" required>
                <label for="day50" class="day">15</label>
                <input type="radio" name="day" value="16" id="day51" required>
                <label for="day51" class="day">16</label>
                <input type="radio" name="day" value="17" id="day52" required>
                <label for="day52" class="day">17</label>
                <input type="radio" name="day" value="18" id="day53" required>
                <label for="day53" class="day">18</label>
                <input type="radio" name="day" value="19" id="day54" required>
                <label for="day54" class="day">19</label>
                <input type="radio" name="day" value="20" id="day55" required>
                <label for="day55" class="day">20</label>
                <input type="radio" name="day" value="21" id="day56" required>
                <label for="day56" class="day">21</label>
              </div>

              <div class="week_line">
                <input type="radio" name="day" value="22" id="day57" required>
                <label for="day57" class="day">22</label>
                <input type="radio" name="day" value="23" id="day58" required>
                <label for="day58" class="day">23</label>
                <input type="radio" name="day" value="24" id="day59" required>
                <label for="day59" class="day">24</label>
                <input type="radio" name="day" value="25" id="day60" required>
                <label for="day60" class="day">25</label>
                <input type="radio" name="day" value="26" id="day61" required>
                <label for="day61" class="day">26</label>
                <input type="radio" name="day" value="27" id="day62" required>
                <label for="day62" class="day">27</label>
                <input type="radio" name="day" value="28" id="day63" required>
                <label for="day63" class="day">28</label>
              </div>

              <div class="week_line">
                <input type="radio" name="day" value="29" id="day64" required>
                <label for="day64" class="day">29</label>
                <input type="radio" name="day" value="30" id="day65" required>
                <label for="day65" class="day">30</label>
                <input type="radio" name="day" value="" id="day66" required>
                <label for="day66" class="day"></label>
                <input type="radio" name="day" value="" id="day67" required>
                <label for="day67" class="day"></label>
                <input type="radio" name="day" value="" id="day68" required>
                <label for="day68" class="day"></label>
                <input type="radio" name="day" value="" id="day69" required>
                <label for="day69" class="day"></label>
                <input type="radio" name="day" value="" id="day70" required>
                <label for="day70" class="day"></label>
              </div>
            </div>
  </div>
    <div class="for">
    <input id="submit2" type="submit" value="タイムテーブルへ" >
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
            <li>住所：・・・・・・・・・・・・・・・・</li>
          </ul>
      </div>
  </div>

  </html>

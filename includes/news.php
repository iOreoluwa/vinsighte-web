<style type="text/css">
body {
  font: 600 14px/24px "Open Sans", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", Sans-Serif;
  margin: 12px 0;
}
.card-container {
  cursor: pointer;a
  height: 150px;
  perspective: 600;
  position: relative;
  width: 150px;
}
.card {
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: all 1s ease-in-out;
  width: 100%;
}
.card:hover {
  transform: rotateY(180deg);
}
.card .side {
  backface-visibility: hidden;
  border-radius: 6px;
  height: 100%;
  position: absolute;
  overflow: hidden;
  width: 100%;
}
.card .back {
  background: #eaeaed;
  color: #0087cc;
  line-height: 150px;
  text-align: center;
  transform: rotateY(180deg);
}
</style>


<div class="card-container">
  <div class="card">
    <div class="side"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/29841/jimmy.jpg" alt="Jimmy Eat World"></div>
    <div class="side back">Jimmy Eat World</div>
  </div>
</div>
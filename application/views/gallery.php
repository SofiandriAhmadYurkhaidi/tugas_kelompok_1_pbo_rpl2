<?php $this->load->view('components/head'); ?>


<style>
    .containers div{
 background-size: cover;
 background-position: center;
 border-radius: 15px;
 background-color: dodgerblue;
 transition: 0.4s;
 box-shadow: 0 0 0px rgba(0,0,0,1);
}
.containers{
 gap: 10px;
 display: grid;
 grid-template-columns: 1fr 1fr 1fr 1fr;
 grid-template-rows: 1fr 1fr 1fr 1fr;
 width: 100%;
 height: 100%;
}
.one{
 background-image: url(https://images.unsplash.com/photo-1658728942259-fca77c5b5231?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTk2NDY3MzA&ixlib=rb-1.2.1&q=80);
 grid-area: 1 / 1 / span 2 / span 1;
}
.two{
 background-image: url(https://images.unsplash.com/photo-1472214103451-9374bd1c798e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTk2NDY4MDc&ixlib=rb-1.2.1&q=80);
 grid-area: 3 / 1 / span 1 / span 1;
}
.three{
 background-image: url(https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTk2NDY4MDc&ixlib=rb-1.2.1&q=80);
 grid-area: 4 / 1 / span 1 / span 1;
}
.four{
 background-image: url(https://cdn.pixabay.com/photo/2017/01/06/17/49/honey-1958464_1280.jpg);
 grid-area: 3 / 2 / span 2 / span 1;
}
.five{
 background-image: url(https://cdn.pixabay.com/photo/2013/11/28/10/03/river-219972_1280.jpg);
 grid-area: 1 / 3 / span 1 / span 2;
}
.six{
 background-image: url(https://cdn.pixabay.com/photo/2021/11/30/00/54/sweden-6834164_1280.jpg);
 grid-area: 2 / 3 / span 2 / span 1;
}
.seven{
 background-image: url(https://cdn.pixabay.com/photo/2017/11/15/13/27/river-2951997_1280.jpg);
}
.eight{
 background-image: url(https://cdn.pixabay.com/photo/2017/10/10/07/48/beach-2836300_1280.jpg);
}
.nine{
 background-image: url(https://cdn.pixabay.com/photo/2018/02/02/17/29/nature-3125912_1280.jpg);
 grid-area: 4 / 3 / span 1 / span 2;
}
.ten{
 background-image: url(https://cdn.pixabay.com/photo/2016/12/11/12/02/mountains-1899264_1280.jpg);
}
.eleven{
 background-image: url(https://cdn.pixabay.com/photo/2016/10/25/12/28/iceland-1768744_1280.jpg);
}
</style>

<tr style="height:700px;background:#1446A0;color: white;">
<td style="height: inherit;padding:10px;">
<div style="width:100%;height:100%;">
<div class="containers">
 <div class="one"></div>
 <div class="two"></div>
 <div class="three"></div>
 <div class="four"></div>
 <div class="five"></div>
 <div class="six"></div>
 <div class="seven"></div>
 <div class="eight"></div>
 <div class="nine"></div>
 <div class="ten"></div>
 <div class="eleven"></div>
</div>
</div>
</td>
</tr>


<?php $this->load->view('components/foot'); ?>
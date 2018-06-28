@extends('layouts.answers')
<div id="DIV_1">
    <br id="BR_2" />
    <div id="DIV_3">
        <span id="SPAN_4"></span>
        <h2 id="H2_5">
             <a href="/Samsung_Galaxy-A6_Reviews_0" id="A_6">Samsung Galaxy A6 Price Discussion, Opinions and Reviews</a>
        </h2>
    </div>
    @foreach($data as $post)
    <div id="DIV_7">
        <div id="DIV_8">
             <span id="SPAN_9">{{$post->comment}}</span>
        </div>
        <div id="DIV_11">
            <div id="DIV_12">
                <img src="images/upost.gif" width="10" height="10" id="IMG_13" alt='' /> <span id="SPAN_14">{{$post->created_at}}</span>
            </div>
            <div id="DIV_15">
                <img src="images/uname.gif" width="11" height="10" id="IMG_16" alt='' /> <span id="SPAN_17">{{$post->name}}</span>
            </div>
        </div>
    </div>
@endforeach
    <div id="DIV_139">
    </div>
    <p id="P_140">
        <span id="SPAN_141"><a href="../" id="A_142">Mobile Prices in Pakistan</a> &gt; <a href="/Samsung_Mobiles_Prices" id="A_143">Samsung Pakistan</a></span>
    </p><a rel="nofollow" href="postComments.php?id=2607&amp;brand=Samsung&amp;model=Galaxy A6" id="A_144"></a><a href="Samsung_Galaxy-A6_Reviews_0" id="A_145"></a>
    <table id="TABLE_146">
        <tbody id="TBODY_147">
            <tr id="TR_148">
                <form id="FORM_149" name="form1" method="post" action="postComments.php?id=2607&amp;brand=Samsung&amp;model=Galaxy A6">
                </form>
                <td id="TD_150">
                <input name="Submit" type="submit" value="Post Your Opinions" id="INPUT_151" />
                </td>
                <form id="FORM_152" name="form1" method="post" action="Samsung_Galaxy-A6_Reviews_0">
                </form>
                <td id="TD_153">
                <input name="Submit2" type="submit" value="View All Opinions" id="INPUT_154" />
                </td>
                <td id="TD_155">
                    <div id="DIV_156">
                        Total user opinions: <strong id="STRONG_157">12</strong>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
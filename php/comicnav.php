<!-- Comic navigation -->
<div class="row text-center">
    <div class="col">
        <a href=<?php echo(CURR_PAGE . "?comic=" . 1) ?> class="btn btn-light" role="button">First</a>
    </div>
    <div class="col">
        <a href=<?php echo(CURR_PAGE . "?comic=" . (CURR_N == 1 ? 1 : CURR_N - 1)) ?> class="btn btn-light" role="button">Prev</a>
    </div>
    <div class="col">
        <a href=<?php echo(CURR_PAGE . "?comic=" . rand(1, N_COMICS)) ?> class="btn btn-light" role="button">Random</a>
    </div>
    <div class="col">
        <a href=<?php echo(CURR_PAGE . "?comic=" . (CURR_N == N_COMICS ? CURR_N : CURR_N + 1)) ?> class="btn btn-light" role="button" >Next</a>
    </div>
    <div class="col">
        <a href=<?php echo(CURR_PAGE . "?comic=" . N_COMICS) ?> class="btn btn-light" role="button" >Last </a>
    </div>
</div>

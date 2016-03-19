<!--<link rel="stylesheet" href="<?php echo base_url();?>_assets/h-js/styles/monokai-sublime.css">-->
<link rel="stylesheet" href="<?php echo base_url();?>_assets/h-js/prism.css">
<link rel="stylesheet" href="<?php echo base_url();?>_assets/APlayer/APlayer.min.css">

<div class="demo-blog--blogpost">
    <div class="demo-back">
        <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php echo base_url();?>" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
        </a>
    </div>
    <div class="demo-blog__posts mdl-grid">
        <div class="mdl-card post-code mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
                <h3>On the road again</h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
                <div class="minilogo"></div>
                <div>
                    <strong>The Newist</strong>
                    <span>2 days ago</span>
                </div>
                <div class="section-spacer"></div>
                <div style="display: inline;">
                    425
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">favorite</i>
                        <span class="visuallyhidden">favorites</span>
                    </button>
                </div>
                <div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" onclick="bookmark()">
                        <i class="material-icons" role="presentation">bookmark</i>
                        <span class="visuallyhidden">bookmark</span>
                    </button>
                </div>
                <div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">share</i>
                        <span class="visuallyhidden">share</span>
                    </button>
                </div>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
                <div id="player4" class="aplayer" style="width: 100%;"></div>
                <p>
                    Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Sunt velit aliquip sunt elit ex nulla reprehenderit qui ut eiusmod ipsum do. Duis veniam reprehenderit laborum occaecat id proident nulla veniam. Duis enim deserunt voluptate aute veniam sint pariatur exercitation. Irure mollit est sit labore est deserunt pariatur duis aute laboris cupidatat. Consectetur consequat esse est sit veniam adipisicing ipsum enim irure.
                </p>
                <pre class="line-numbers">
                <code class="language-php">
                require_once 'Zend/Uri/Http.php';

                namespace Location\Web;

                interface Factory{
                    static function _factory();
                }

                abstract class URI extends BaseURI implements Factory{
                    abstract function test();

                    public static $st1 = 1;
                    const ME = "Yo";
                    var $list = NULL;
                    private $var;

                    /**
                     * Returns a URI
                     *
                     * @return URI
                     */
                    static public function _factory($stats = array(), $uri = 'http'){
                        echo __METHOD__;
                        $uri = explode(':', $uri, 0b10);
                        $schemeSpecific = isset($uri[1]) ? $uri[1] : '';
                        $desc = 'Multi line description';

                        // Security check
                        if (!ctype_alnum($scheme)) {
                            throw new Zend_Uri_Exception('Illegal scheme');
                        }

                        $this->var = 0 - self::$st;
                        $this->list = list(Array("1"=> 2, 2=>self::ME, 3 => \Location\Web\URI::class));

                        return [
                            'uri'   => $uri,
                            'value' => null,
                        ];
                    }
                }

                echo URI::ME . URI::$st1;

                __halt_compiler () ; datahere
                datahere
                datahere */
                datahere
                </code>
                </pre>
                
                <p>
                    Qui ullamco consectetur aute fugiat officia ullamco proident Lorem ad irure. Sint eu ut consectetur ut esse veniam laboris adipisicing aliquip minim anim labore commodo. Incididunt eu enim enim ipsum Lorem commodo tempor duis eu ullamco tempor elit occaecat sit. Culpa eu sit voluptate ullamco ad irure. Anim commodo aliquip cillum ea nostrud commodo id culpa eu irure ut proident. Incididunt cillum excepteur incididunt mollit exercitation fugiat in. Magna irure laborum amet non ullamco aliqua eu. Aliquip adipisicing dolore irure culpa aute enim. Ullamco quis eiusmod ipsum laboris quis qui.
                </p>
                <p>
                    Cillum ullamco eu cupidatat excepteur Lorem minim sint quis officia irure irure sint fugiat nostrud. Pariatur Lorem irure excepteur Lorem non irure ea fugiat adipisicing esse nisi ullamco proident sint. Consectetur qui quis cillum occaecat ullamco veniam et Lorem cupidatat pariatur. Labore officia ex aliqua et occaecat velit dolor deserunt minim velit mollit irure. Cillum cupidatat enim officia non velit officia labore. Ut esse nisi voluptate et deserunt enim laborum qui magna sint sunt cillum. Id exercitation labore sint ea labore adipisicing deserunt enim commodo consectetur reprehenderit enim. Est anim nostrud quis non fugiat duis cillum. Aliquip enim officia ad commodo id.
                </p>
                
            </div>
            <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
                <form>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea rows=2 class="mdl-textfield__input" id="comment"></textarea>
                        <label for="comment" class="mdl-textfield__label">Join the discussion</label>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                    </button>
                </form>
                <div class="comment mdl-color-text--grey-700">
                    <header class="comment__header">
                        <img src="<?php echo base_url();?>_assets/material/img/avatar.png" class="comment__avatar">
                        <div class="comment__author">
                            <strong>James Splayd</strong>
                            <span>2 days ago</span>
                        </div>
                    </header>
                    <div class="comment__text">
                        In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.
                    </div>
                    <nav class="comment__actions">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
                        </button>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
                        </button>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
                        </button>
                    </nav>
                    <div class="comment__answers">
                        <div class="comment">
                            <header class="comment__header">
                                <img src="<?php echo base_url();?>_assets/material/img/avatar.png" class="comment__avatar">
                                <div class="comment__author">
                                    <strong>John Dufry</strong>
                                    <span>2 days ago</span>
                                </div>
                            </header>
                            <div class="comment__text">
                                Yep, agree!
                            </div>
                            <nav class="comment__actions">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                    <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                    <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                    <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
            <a href="index.html" class="demo-nav__button">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                    <i class="material-icons">arrow_back</i>
                </button>
                Newer
            </a>
            <div class="section-spacer"></div>
            <a href="index.html" class="demo-nav__button">
                Older
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                    <i class="material-icons">arrow_forward</i>
                </button>
            </a>
        </nav>
    </div>
</div>

<script src="<?php echo base_url();?>_assets/h-js/prism.js"></script>
<script src="<?php echo base_url();?>_assets/APlayer/APlayer.min.js"></script>
<!--<script src="<?php echo base_url();?>_assets/h-js/highlight.pack.js"></script>-->
<script src="<?php echo base_url();?>_assets/js/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function() {
        hljs.initHighlightingOnLoad();
    });
</script>

<script>
    function bookmark(){
        var url = 'http://' + location.host; // i'm in a sub-page and bookmarking the home page
        var name = "Snir's Homepage";

        if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1){ //chrome
          alert("In order to bookmark go to the homepage and press " 
              + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 
                  'Command/Cmd' : 'CTRL') + "+D.")
        } 
        else if (window.sidebar) { // Mozilla Firefox Bookmark
          //important for firefox to add bookmarks - remember to check out the checkbox on the popup
          $(this).attr('rel', 'sidebar');
          //set the appropriate attributes
          $(this).attr('href', url);
          $(this).attr('title', name);

          //add bookmark:
          //  window.sidebar.addPanel(name, url, '');
          //  window.sidebar.addPanel(url, name, '');
          window.sidebar.addPanel('', '', '');
        } 
        else if (window.external) { // IE Favorite
              window.external.addFavorite(url, name);
        } 
        return;
    }
</script>

<script>
    var ap4 = new APlayer({
        element: document.getElementById('player4'),
        narrow: false,
        autoplay: false,
        showlrc: false,
        theme: '#ad7a86',
        music: [
            {
                title: 'Kalimba',
                author: 'Mr. Scruff',
                url: 'http://192.168.12.127:88/MaterialMe/_assets/uploaded/sound/Kalimba.mp3',
                pic: 'http://192.168.12.127:88/MaterialMe/_assets/uploaded/image/dist1.png'
            },
            {
                title: 'Maid with the Flaxen Hair',
                author: 'Richard Stoltzman, Slovak Radio Symphony Orchestra',
                url: 'http://192.168.12.127:88/MaterialMe/_assets/uploaded/sound/Maid_with_the_Flaxen_Hair.mp3',
                pic: 'http://192.168.12.127:88/MaterialMe/_assets/uploaded/image/dist1.png'
            },
            {
                title: 'Sleep Away',
                author: 'Bob Acri',
                url: 'http://192.168.12.127:88/MaterialMe/_assets/uploaded/sound/Sleep_Away.mp3',
                pic: 'http://192.168.12.127:88/MaterialMe/_assets/uploaded/image/dist1.png'
            }
        ]
    });
    ap4.init();
</script>
<style>
.iti {
  position: relative;
  display: inline-block; }
  .iti * {
    box-sizing: border-box;
    -moz-box-sizing: border-box; }
  .iti__hide {
    display: none; }
  .iti__v-hide {
    visibility: hidden; }
  .iti input, .iti input[type=text], .iti input[type=tel] {
    position: relative;
    z-index: 0;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-right: 36px;
    margin-right: 0; }
  .iti__flag-container {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    padding: 1px; }
  .iti__selected-flag {
    z-index: 1;
    position: relative;
    display: flex;
    align-items: center;
    height: 100%;
    padding: 0 6px 0 8px; }
  .iti__arrow {
    margin-left: 6px;
    width: 0;
    height: 0;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-top: 4px solid #555; }
    .iti__arrow--up {
      border-top: none;
      border-bottom: 4px solid #555; }
  .iti__country-list {
    position: absolute;
    z-index: 2;
    list-style: none;
    text-align: left;
    padding: 0;
    margin: 0 0 0 -1px;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    background-color: white;
    border: 1px solid #CCC;
    white-space: nowrap;
    max-height: 200px;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch; }
    .iti__country-list--dropup {
      bottom: 100%;
      margin-bottom: -1px; }
    @media (max-width: 500px) {
      .iti__country-list {
        white-space: normal; } }
  .iti__flag-box {
    display: inline-block;
    width: 20px; }
  .iti__divider {
    padding-bottom: 5px;
    margin-bottom: 5px;
    border-bottom: 1px solid #CCC; }
  .iti__country {
    padding: 5px 10px;
    outline: none; }
  .iti__dial-code {
    color: #999; }
  .iti__country.iti__highlight {
    background-color: rgba(0, 0, 0, 0.05); }
  .iti__flag-box, .iti__country-name, .iti__dial-code {
    vertical-align: middle; }
  .iti__flag-box, .iti__country-name {
    margin-right: 6px; }
  .iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {
    padding-right: 6px;
    padding-left: 52px;
    margin-left: 0; }
  .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container {
    right: auto;
    left: 0; }
  .iti--allow-dropdown .iti__flag-container:hover {
    cursor: pointer; }
    .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
      background-color: rgba(0, 0, 0, 0.05); }
  .iti--allow-dropdown input[disabled] + .iti__flag-container:hover,
  .iti--allow-dropdown input[readonly] + .iti__flag-container:hover {
    cursor: default; }
    .iti--allow-dropdown input[disabled] + .iti__flag-container:hover .iti__selected-flag,
    .iti--allow-dropdown input[readonly] + .iti__flag-container:hover .iti__selected-flag {
      background-color: transparent; }
  .iti--separate-dial-code .iti__selected-flag {
    background-color: rgba(0, 0, 0, 0.05); }
  .iti--separate-dial-code .iti__selected-dial-code {
    margin-left: 6px; }
  .iti--container {
    position: absolute;
    top: -1000px;
    left: -1000px;
    z-index: 1060;
    padding: 1px; }
    .iti--container:hover {
      cursor: pointer; }

.iti-mobile .iti--container {
  top: 30px;
  bottom: 30px;
  left: 30px;
  right: 30px;
  position: fixed; }

.iti-mobile .iti__country-list {
  max-height: 100%;
  width: 100%; }

.iti-mobile .iti__country {
  padding: 10px 10px;
  line-height: 1.5em; }

.iti__flag {
  width: 20px; }
  .iti__flag.iti__be {
    width: 18px; }
  .iti__flag.iti__ch {
    width: 15px; }
  .iti__flag.iti__mc {
    width: 19px; }
  .iti__flag.iti__ne {
    width: 18px; }
  .iti__flag.iti__np {
    width: 13px; }
  .iti__flag.iti__va {
    width: 15px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .iti__flag {
      background-size: 5652px 15px; } }
  .iti__flag.iti__ac {
    height: 10px;
    background-position: 0px 0px; }
  .iti__flag.iti__ad {
    height: 14px;
    background-position: -22px 0px; }
  .iti__flag.iti__ae {
    height: 10px;
    background-position: -44px 0px; }
  .iti__flag.iti__af {
    height: 14px;
    background-position: -66px 0px; }
  .iti__flag.iti__ag {
    height: 14px;
    background-position: -88px 0px; }
  .iti__flag.iti__ai {
    height: 10px;
    background-position: -110px 0px; }
  .iti__flag.iti__al {
    height: 15px;
    background-position: -132px 0px; }
  .iti__flag.iti__am {
    height: 10px;
    background-position: -154px 0px; }
  .iti__flag.iti__ao {
    height: 14px;
    background-position: -176px 0px; }
  .iti__flag.iti__aq {
    height: 14px;
    background-position: -198px 0px; }
  .iti__flag.iti__ar {
    height: 13px;
    background-position: -220px 0px; }
  .iti__flag.iti__as {
    height: 10px;
    background-position: -242px 0px; }
  .iti__flag.iti__at {
    height: 14px;
    background-position: -264px 0px; }
  .iti__flag.iti__au {
    height: 10px;
    background-position: -286px 0px; }
  .iti__flag.iti__aw {
    height: 14px;
    background-position: -308px 0px; }
  .iti__flag.iti__ax {
    height: 13px;
    background-position: -330px 0px; }
  .iti__flag.iti__az {
    height: 10px;
    background-position: -352px 0px; }
  .iti__flag.iti__ba {
    height: 10px;
    background-position: -374px 0px; }
  .iti__flag.iti__bb {
    height: 14px;
    background-position: -396px 0px; }
  .iti__flag.iti__bd {
    height: 12px;
    background-position: -418px 0px; }
  .iti__flag.iti__be {
    height: 15px;
    background-position: -440px 0px; }
  .iti__flag.iti__bf {
    height: 14px;
    background-position: -460px 0px; }
  .iti__flag.iti__bg {
    height: 12px;
    background-position: -482px 0px; }
  .iti__flag.iti__bh {
    height: 12px;
    background-position: -504px 0px; }
  .iti__flag.iti__bi {
    height: 12px;
    background-position: -526px 0px; }
  .iti__flag.iti__bj {
    height: 14px;
    background-position: -548px 0px; }
  .iti__flag.iti__bl {
    height: 14px;
    background-position: -570px 0px; }
  .iti__flag.iti__bm {
    height: 10px;
    background-position: -592px 0px; }
  .iti__flag.iti__bn {
    height: 10px;
    background-position: -614px 0px; }
  .iti__flag.iti__bo {
    height: 14px;
    background-position: -636px 0px; }
  .iti__flag.iti__bq {
    height: 14px;
    background-position: -658px 0px; }
  .iti__flag.iti__br {
    height: 14px;
    background-position: -680px 0px; }
  .iti__flag.iti__bs {
    height: 10px;
    background-position: -702px 0px; }
  .iti__flag.iti__bt {
    height: 14px;
    background-position: -724px 0px; }
  .iti__flag.iti__bv {
    height: 15px;
    background-position: -746px 0px; }
  .iti__flag.iti__bw {
    height: 14px;
    background-position: -768px 0px; }
  .iti__flag.iti__by {
    height: 10px;
    background-position: -790px 0px; }
  .iti__flag.iti__bz {
    height: 14px;
    background-position: -812px 0px; }
  .iti__flag.iti__ca {
    height: 10px;
    background-position: -834px 0px; }
  .iti__flag.iti__cc {
    height: 10px;
    background-position: -856px 0px; }
  .iti__flag.iti__cd {
    height: 15px;
    background-position: -878px 0px; }
  .iti__flag.iti__cf {
    height: 14px;
    background-position: -900px 0px; }
  .iti__flag.iti__cg {
    height: 14px;
    background-position: -922px 0px; }
  .iti__flag.iti__ch {
    height: 15px;
    background-position: -944px 0px; }
  .iti__flag.iti__ci {
    height: 14px;
    background-position: -961px 0px; }
  .iti__flag.iti__ck {
    height: 10px;
    background-position: -983px 0px; }
  .iti__flag.iti__cl {
    height: 14px;
    background-position: -1005px 0px; }
  .iti__flag.iti__cm {
    height: 14px;
    background-position: -1027px 0px; }
  .iti__flag.iti__cn {
    height: 14px;
    background-position: -1049px 0px; }
  .iti__flag.iti__co {
    height: 14px;
    background-position: -1071px 0px; }
  .iti__flag.iti__cp {
    height: 14px;
    background-position: -1093px 0px; }
  .iti__flag.iti__cr {
    height: 12px;
    background-position: -1115px 0px; }
  .iti__flag.iti__cu {
    height: 10px;
    background-position: -1137px 0px; }
  .iti__flag.iti__cv {
    height: 12px;
    background-position: -1159px 0px; }
  .iti__flag.iti__cw {
    height: 14px;
    background-position: -1181px 0px; }
  .iti__flag.iti__cx {
    height: 10px;
    background-position: -1203px 0px; }
  .iti__flag.iti__cy {
    height: 14px;
    background-position: -1225px 0px; }
  .iti__flag.iti__cz {
    height: 14px;
    background-position: -1247px 0px; }
  .iti__flag.iti__de {
    height: 12px;
    background-position: -1269px 0px; }
  .iti__flag.iti__dg {
    height: 10px;
    background-position: -1291px 0px; }
  .iti__flag.iti__dj {
    height: 14px;
    background-position: -1313px 0px; }
  .iti__flag.iti__dk {
    height: 15px;
    background-position: -1335px 0px; }
  .iti__flag.iti__dm {
    height: 10px;
    background-position: -1357px 0px; }
  .iti__flag.iti__do {
    height: 14px;
    background-position: -1379px 0px; }
  .iti__flag.iti__dz {
    height: 14px;
    background-position: -1401px 0px; }
  .iti__flag.iti__ea {
    height: 14px;
    background-position: -1423px 0px; }
  .iti__flag.iti__ec {
    height: 14px;
    background-position: -1445px 0px; }
  .iti__flag.iti__ee {
    height: 13px;
    background-position: -1467px 0px; }
  .iti__flag.iti__eg {
    height: 14px;
    background-position: -1489px 0px; }
  .iti__flag.iti__eh {
    height: 10px;
    background-position: -1511px 0px; }
  .iti__flag.iti__er {
    height: 10px;
    background-position: -1533px 0px; }
  .iti__flag.iti__es {
    height: 14px;
    background-position: -1555px 0px; }
  .iti__flag.iti__et {
    height: 10px;
    background-position: -1577px 0px; }
  .iti__flag.iti__eu {
    height: 14px;
    background-position: -1599px 0px; }
  .iti__flag.iti__fi {
    height: 12px;
    background-position: -1621px 0px; }
  .iti__flag.iti__fj {
    height: 10px;
    background-position: -1643px 0px; }
  .iti__flag.iti__fk {
    height: 10px;
    background-position: -1665px 0px; }
  .iti__flag.iti__fm {
    height: 11px;
    background-position: -1687px 0px; }
  .iti__flag.iti__fo {
    height: 15px;
    background-position: -1709px 0px; }
  .iti__flag.iti__fr {
    height: 14px;
    background-position: -1731px 0px; }
  .iti__flag.iti__ga {
    height: 15px;
    background-position: -1753px 0px; }
  .iti__flag.iti__gb {
    height: 10px;
    background-position: -1775px 0px; }
  .iti__flag.iti__gd {
    height: 12px;
    background-position: -1797px 0px; }
  .iti__flag.iti__ge {
    height: 14px;
    background-position: -1819px 0px; }
  .iti__flag.iti__gf {
    height: 14px;
    background-position: -1841px 0px; }
  .iti__flag.iti__gg {
    height: 14px;
    background-position: -1863px 0px; }
  .iti__flag.iti__gh {
    height: 14px;
    background-position: -1885px 0px; }
  .iti__flag.iti__gi {
    height: 10px;
    background-position: -1907px 0px; }
  .iti__flag.iti__gl {
    height: 14px;
    background-position: -1929px 0px; }
  .iti__flag.iti__gm {
    height: 14px;
    background-position: -1951px 0px; }
  .iti__flag.iti__gn {
    height: 14px;
    background-position: -1973px 0px; }
  .iti__flag.iti__gp {
    height: 14px;
    background-position: -1995px 0px; }
  .iti__flag.iti__gq {
    height: 14px;
    background-position: -2017px 0px; }
  .iti__flag.iti__gr {
    height: 14px;
    background-position: -2039px 0px; }
  .iti__flag.iti__gs {
    height: 10px;
    background-position: -2061px 0px; }
  .iti__flag.iti__gt {
    height: 13px;
    background-position: -2083px 0px; }
  .iti__flag.iti__gu {
    height: 11px;
    background-position: -2105px 0px; }
  .iti__flag.iti__gw {
    height: 10px;
    background-position: -2127px 0px; }
  .iti__flag.iti__gy {
    height: 12px;
    background-position: -2149px 0px; }
  .iti__flag.iti__hk {
    height: 14px;
    background-position: -2171px 0px; }
  .iti__flag.iti__hm {
    height: 10px;
    background-position: -2193px 0px; }
  .iti__flag.iti__hn {
    height: 10px;
    background-position: -2215px 0px; }
  .iti__flag.iti__hr {
    height: 10px;
    background-position: -2237px 0px; }
  .iti__flag.iti__ht {
    height: 12px;
    background-position: -2259px 0px; }
  .iti__flag.iti__hu {
    height: 10px;
    background-position: -2281px 0px; }
  .iti__flag.iti__ic {
    height: 14px;
    background-position: -2303px 0px; }
  .iti__flag.iti__id {
    height: 14px;
    background-position: -2325px 0px; }
  .iti__flag.iti__ie {
    height: 10px;
    background-position: -2347px 0px; }
  .iti__flag.iti__il {
    height: 15px;
    background-position: -2369px 0px; }
  .iti__flag.iti__im {
    height: 10px;
    background-position: -2391px 0px; }
  .iti__flag.iti__in {
    height: 14px;
    background-position: -2413px 0px; }
  .iti__flag.iti__io {
    height: 10px;
    background-position: -2435px 0px; }
  .iti__flag.iti__iq {
    height: 14px;
    background-position: -2457px 0px; }
  .iti__flag.iti__ir {
    height: 12px;
    background-position: -2479px 0px; }
  .iti__flag.iti__is {
    height: 15px;
    background-position: -2501px 0px; }
  .iti__flag.iti__it {
    height: 14px;
    background-position: -2523px 0px; }
  .iti__flag.iti__je {
    height: 12px;
    background-position: -2545px 0px; }
  .iti__flag.iti__jm {
    height: 10px;
    background-position: -2567px 0px; }
  .iti__flag.iti__jo {
    height: 10px;
    background-position: -2589px 0px; }
  .iti__flag.iti__jp {
    height: 14px;
    background-position: -2611px 0px; }
  .iti__flag.iti__ke {
    height: 14px;
    background-position: -2633px 0px; }
  .iti__flag.iti__kg {
    height: 12px;
    background-position: -2655px 0px; }
  .iti__flag.iti__kh {
    height: 13px;
    background-position: -2677px 0px; }
  .iti__flag.iti__ki {
    height: 10px;
    background-position: -2699px 0px; }
  .iti__flag.iti__km {
    height: 12px;
    background-position: -2721px 0px; }
  .iti__flag.iti__kn {
    height: 14px;
    background-position: -2743px 0px; }
  .iti__flag.iti__kp {
    height: 10px;
    background-position: -2765px 0px; }
  .iti__flag.iti__kr {
    height: 14px;
    background-position: -2787px 0px; }
  .iti__flag.iti__kw {
    height: 10px;
    background-position: -2809px 0px; }
  .iti__flag.iti__ky {
    height: 10px;
    background-position: -2831px 0px; }
  .iti__flag.iti__kz {
    height: 10px;
    background-position: -2853px 0px; }
  .iti__flag.iti__la {
    height: 14px;
    background-position: -2875px 0px; }
  .iti__flag.iti__lb {
    height: 14px;
    background-position: -2897px 0px; }
  .iti__flag.iti__lc {
    height: 10px;
    background-position: -2919px 0px; }
  .iti__flag.iti__li {
    height: 12px;
    background-position: -2941px 0px; }
  .iti__flag.iti__lk {
    height: 10px;
    background-position: -2963px 0px; }
  .iti__flag.iti__lr {
    height: 11px;
    background-position: -2985px 0px; }
  .iti__flag.iti__ls {
    height: 14px;
    background-position: -3007px 0px; }
  .iti__flag.iti__lt {
    height: 12px;
    background-position: -3029px 0px; }
  .iti__flag.iti__lu {
    height: 12px;
    background-position: -3051px 0px; }
  .iti__flag.iti__lv {
    height: 10px;
    background-position: -3073px 0px; }
  .iti__flag.iti__ly {
    height: 10px;
    background-position: -3095px 0px; }
  .iti__flag.iti__ma {
    height: 14px;
    background-position: -3117px 0px; }
  .iti__flag.iti__mc {
    height: 15px;
    background-position: -3139px 0px; }
  .iti__flag.iti__md {
    height: 10px;
    background-position: -3160px 0px; }
  .iti__flag.iti__me {
    height: 10px;
    background-position: -3182px 0px; }
  .iti__flag.iti__mf {
    height: 14px;
    background-position: -3204px 0px; }
  .iti__flag.iti__mg {
    height: 14px;
    background-position: -3226px 0px; }
  .iti__flag.iti__mh {
    height: 11px;
    background-position: -3248px 0px; }
  .iti__flag.iti__mk {
    height: 10px;
    background-position: -3270px 0px; }
  .iti__flag.iti__ml {
    height: 14px;
    background-position: -3292px 0px; }
  .iti__flag.iti__mm {
    height: 14px;
    background-position: -3314px 0px; }
  .iti__flag.iti__mn {
    height: 10px;
    background-position: -3336px 0px; }
  .iti__flag.iti__mo {
    height: 14px;
    background-position: -3358px 0px; }
  .iti__flag.iti__mp {
    height: 10px;
    background-position: -3380px 0px; }
  .iti__flag.iti__mq {
    height: 14px;
    background-position: -3402px 0px; }
  .iti__flag.iti__mr {
    height: 14px;
    background-position: -3424px 0px; }
  .iti__flag.iti__ms {
    height: 10px;
    background-position: -3446px 0px; }
  .iti__flag.iti__mt {
    height: 14px;
    background-position: -3468px 0px; }
  .iti__flag.iti__mu {
    height: 14px;
    background-position: -3490px 0px; }
  .iti__flag.iti__mv {
    height: 14px;
    background-position: -3512px 0px; }
  .iti__flag.iti__mw {
    height: 14px;
    background-position: -3534px 0px; }
  .iti__flag.iti__mx {
    height: 12px;
    background-position: -3556px 0px; }
  .iti__flag.iti__my {
    height: 10px;
    background-position: -3578px 0px; }
  .iti__flag.iti__mz {
    height: 14px;
    background-position: -3600px 0px; }
  .iti__flag.iti__na {
    height: 14px;
    background-position: -3622px 0px; }
  .iti__flag.iti__nc {
    height: 10px;
    background-position: -3644px 0px; }
  .iti__flag.iti__ne {
    height: 15px;
    background-position: -3666px 0px; }
  .iti__flag.iti__nf {
    height: 10px;
    background-position: -3686px 0px; }
  .iti__flag.iti__ng {
    height: 10px;
    background-position: -3708px 0px; }
  .iti__flag.iti__ni {
    height: 12px;
    background-position: -3730px 0px; }
  .iti__flag.iti__nl {
    height: 14px;
    background-position: -3752px 0px; }
  .iti__flag.iti__no {
    height: 15px;
    background-position: -3774px 0px; }
  .iti__flag.iti__np {
    height: 15px;
    background-position: -3796px 0px; }
  .iti__flag.iti__nr {
    height: 10px;
    background-position: -3811px 0px; }
  .iti__flag.iti__nu {
    height: 10px;
    background-position: -3833px 0px; }
  .iti__flag.iti__nz {
    height: 10px;
    background-position: -3855px 0px; }
  .iti__flag.iti__om {
    height: 10px;
    background-position: -3877px 0px; }
  .iti__flag.iti__pa {
    height: 14px;
    background-position: -3899px 0px; }
  .iti__flag.iti__pe {
    height: 14px;
    background-position: -3921px 0px; }
  .iti__flag.iti__pf {
    height: 14px;
    background-position: -3943px 0px; }
  .iti__flag.iti__pg {
    height: 15px;
    background-position: -3965px 0px; }
  .iti__flag.iti__ph {
    height: 10px;
    background-position: -3987px 0px; }
  .iti__flag.iti__pk {
    height: 14px;
    background-position: -4009px 0px; }
  .iti__flag.iti__pl {
    height: 13px;
    background-position: -4031px 0px; }
  .iti__flag.iti__pm {
    height: 14px;
    background-position: -4053px 0px; }
  .iti__flag.iti__pn {
    height: 10px;
    background-position: -4075px 0px; }
  .iti__flag.iti__pr {
    height: 14px;
    background-position: -4097px 0px; }
  .iti__flag.iti__ps {
    height: 10px;
    background-position: -4119px 0px; }
  .iti__flag.iti__pt {
    height: 14px;
    background-position: -4141px 0px; }
  .iti__flag.iti__pw {
    height: 13px;
    background-position: -4163px 0px; }
  .iti__flag.iti__py {
    height: 11px;
    background-position: -4185px 0px; }
  .iti__flag.iti__qa {
    height: 8px;
    background-position: -4207px 0px; }
  .iti__flag.iti__re {
    height: 14px;
    background-position: -4229px 0px; }
  .iti__flag.iti__ro {
    height: 14px;
    background-position: -4251px 0px; }
  .iti__flag.iti__rs {
    height: 14px;
    background-position: -4273px 0px; }
  .iti__flag.iti__ru {
    height: 14px;
    background-position: -4295px 0px; }
  .iti__flag.iti__rw {
    height: 14px;
    background-position: -4317px 0px; }
  .iti__flag.iti__sa {
    height: 14px;
    background-position: -4339px 0px; }
  .iti__flag.iti__sb {
    height: 10px;
    background-position: -4361px 0px; }
  .iti__flag.iti__sc {
    height: 10px;
    background-position: -4383px 0px; }
  .iti__flag.iti__sd {
    height: 10px;
    background-position: -4405px 0px; }
  .iti__flag.iti__se {
    height: 13px;
    background-position: -4427px 0px; }
  .iti__flag.iti__sg {
    height: 14px;
    background-position: -4449px 0px; }
  .iti__flag.iti__sh {
    height: 10px;
    background-position: -4471px 0px; }
  .iti__flag.iti__si {
    height: 10px;
    background-position: -4493px 0px; }
  .iti__flag.iti__sj {
    height: 15px;
    background-position: -4515px 0px; }
  .iti__flag.iti__sk {
    height: 14px;
    background-position: -4537px 0px; }
  .iti__flag.iti__sl {
    height: 14px;
    background-position: -4559px 0px; }
  .iti__flag.iti__sm {
    height: 15px;
    background-position: -4581px 0px; }
  .iti__flag.iti__sn {
    height: 14px;
    background-position: -4603px 0px; }
  .iti__flag.iti__so {
    height: 14px;
    background-position: -4625px 0px; }
  .iti__flag.iti__sr {
    height: 14px;
    background-position: -4647px 0px; }
  .iti__flag.iti__ss {
    height: 10px;
    background-position: -4669px 0px; }
  .iti__flag.iti__st {
    height: 10px;
    background-position: -4691px 0px; }
  .iti__flag.iti__sv {
    height: 12px;
    background-position: -4713px 0px; }
  .iti__flag.iti__sx {
    height: 14px;
    background-position: -4735px 0px; }
  .iti__flag.iti__sy {
    height: 14px;
    background-position: -4757px 0px; }
  .iti__flag.iti__sz {
    height: 14px;
    background-position: -4779px 0px; }
  .iti__flag.iti__ta {
    height: 10px;
    background-position: -4801px 0px; }
  .iti__flag.iti__tc {
    height: 10px;
    background-position: -4823px 0px; }
  .iti__flag.iti__td {
    height: 14px;
    background-position: -4845px 0px; }
  .iti__flag.iti__tf {
    height: 14px;
    background-position: -4867px 0px; }
  .iti__flag.iti__tg {
    height: 13px;
    background-position: -4889px 0px; }
  .iti__flag.iti__th {
    height: 14px;
    background-position: -4911px 0px; }
  .iti__flag.iti__tj {
    height: 10px;
    background-position: -4933px 0px; }
  .iti__flag.iti__tk {
    height: 10px;
    background-position: -4955px 0px; }
  .iti__flag.iti__tl {
    height: 10px;
    background-position: -4977px 0px; }
  .iti__flag.iti__tm {
    height: 14px;
    background-position: -4999px 0px; }
  .iti__flag.iti__tn {
    height: 14px;
    background-position: -5021px 0px; }
  .iti__flag.iti__to {
    height: 10px;
    background-position: -5043px 0px; }
  .iti__flag.iti__tr {
    height: 14px;
    background-position: -5065px 0px; }
  .iti__flag.iti__tt {
    height: 12px;
    background-position: -5087px 0px; }
  .iti__flag.iti__tv {
    height: 10px;
    background-position: -5109px 0px; }
  .iti__flag.iti__tw {
    height: 14px;
    background-position: -5131px 0px; }
  .iti__flag.iti__tz {
    height: 14px;
    background-position: -5153px 0px; }
  .iti__flag.iti__ua {
    height: 14px;
    background-position: -5175px 0px; }
  .iti__flag.iti__ug {
    height: 14px;
    background-position: -5197px 0px; }
  .iti__flag.iti__um {
    height: 11px;
    background-position: -5219px 0px; }
  .iti__flag.iti__un {
    height: 14px;
    background-position: -5241px 0px; }
  .iti__flag.iti__us {
    height: 11px;
    background-position: -5263px 0px; }
  .iti__flag.iti__uy {
    height: 14px;
    background-position: -5285px 0px; }
  .iti__flag.iti__uz {
    height: 10px;
    background-position: -5307px 0px; }
  .iti__flag.iti__va {
    height: 15px;
    background-position: -5329px 0px; }
  .iti__flag.iti__vc {
    height: 14px;
    background-position: -5346px 0px; }
  .iti__flag.iti__ve {
    height: 14px;
    background-position: -5368px 0px; }
  .iti__flag.iti__vg {
    height: 10px;
    background-position: -5390px 0px; }
  .iti__flag.iti__vi {
    height: 14px;
    background-position: -5412px 0px; }
  .iti__flag.iti__vn {
    height: 14px;
    background-position: -5434px 0px; }
  .iti__flag.iti__vu {
    height: 12px;
    background-position: -5456px 0px; }
  .iti__flag.iti__wf {
    height: 14px;
    background-position: -5478px 0px; }
  .iti__flag.iti__ws {
    height: 10px;
    background-position: -5500px 0px; }
  .iti__flag.iti__xk {
    height: 15px;
    background-position: -5522px 0px; }
  .iti__flag.iti__ye {
    height: 14px;
    background-position: -5544px 0px; }
  .iti__flag.iti__yt {
    height: 14px;
    background-position: -5566px 0px; }
  .iti__flag.iti__za {
    height: 14px;
    background-position: -5588px 0px; }
  .iti__flag.iti__zm {
    height: 14px;
    background-position: -5610px 0px; }
  .iti__flag.iti__zw {
    height: 10px;
    background-position: -5632px 0px; }

.iti__flag {
  height: 15px;
  box-shadow: 0px 0px 1px 0px #888;
  background-image: url("../img/flags.png");
  background-repeat: no-repeat;
  background-color: #DBDBDB;
  background-position: 20px 0; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .iti__flag {
      background-image: url("../img/flags@2x.png"); } }

.iti__flag.iti__np {
  background-color: transparent; }

</style>


<link rel="stylesheet" href="<?php echo base_url(); ?>backend_assets/bower_components/select2/dist/css/select2.min.css">
<div class="content-wrapper">
  <section class="content-header">
    <?php if(isset($shop_data['shop_id']) && !empty($shop_data['shop_id'])){ ?>
      <h1><img src="<?php echo base_url().'common_assets/images/shop.png';?>" style="width: 30px"> Edit Vendor (<?php echo (isset($shop_data['shop_reg_id']) ? $shop_data['shop_reg_id'] : '');?>)</h1>
    <?php }else{ ?>
      <h1><img src="<?php echo base_url().'common_assets/images/shop.png';?>" style="width: 30px"> ADD Vendor</h1>
    <?php } ?>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a href="<?php echo base_url()?>adminnew/shoplist">Shoplist</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-default">
      <div class="box-body">
        <div class="row" style="margin: 0px">
          <?php if(isset($success) && !empty($success)){ ?>
            <div class="alert alert-success" align="center">
              <strong><?php echo $success; ?></strong>
            </div>
          <?php } 
            if(isset($error) && !empty($error)){
          ?>
            <div class="alert alert-danger" align="center">
              <strong><?php echo $error; ?></strong>
            </div>
          <?php } ?>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Vendor Detail</a></li>
              <li><a href="#addbank" data-toggle="tab">Bank Detail</a></li>
             <!--  <li><a href="#gumasta" data-toggle="tab">Employer Registration Number</a></li> -->
              <?php //if(isset($shop_data['shop_id']) && !empty($shop_data['shop_id'])){ ?>
                <!--  <li><a href="<?php echo base_url()?>adminnew/chageshoppassowrd/<?php echo $shop_data['shop_id'];?>" >Change password</a></li> -->
              <?php //}?>
            </ul>
            
              <form role="form" enctype="multipart/form-data" method="post" action="" autocomplete="on">
                <div class="tab-content" style="padding: 0px">
                  <div class="active tab-pane" style="margin: 10px" id="activity">
                      <div class="col-md-6">
                        <!-- <div class="form-group">
                          <label>Registration Number</label>
                          <input type="text" class="form-control" name="shop_registration_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_registration_no']) ? $shop_data['shop_registration_no'] : '' ); ?>" >
                        </div> -->
                        <div class="form-group">
                            <div class="form-group">
                              <label>Vendore Categories</label>
                              <select class="form-control" name="shopcetegory_type_id">
                                <option value="">Select Any Vendore Categories Type</option>
                              <?php if(!empty($shopcategories_data)){ ?>
                                <?php 
                                foreach ($shopcategories_data as $shop_type_list1) {
                                  if($shop_data['shopcetegory_type_id'] == $shop_type_list1['category_name']){
                                    $duration1="selected";
                                  }else{
                                    $duration1="";
                                  }
                                ?>
                                  <option value="<?php echo $shop_type_list1['category_name']; ?>" <?php echo $duration1; ?> ><?php echo $shop_type_list1['category_name'];?></option>
                                <?php
                                }
                                ?>
                              <?php
                              }
                              ?>
                              </select>
                            </div>
                          </select>
                        </div>

                         <div class="form-group">
                          <label>Shop Name</label>
                          <input type="text" class="form-control" name="shop_name" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_name']) ? $shop_data['shop_name'] : '' )?>" required>
                        </div>
                         <div class="form-group">
                          <label>Owner Name</label>
                          <input type="text" class="form-control" name="owner_name" value="<?php echo (!empty($shop_data) && !empty($shop_data['owner_name']) ? $shop_data['owner_name'] : '' ); ?>" required>
                        </div>
                        <div class="form-group">
                          <label>Email-ID</label>
                          <input type="email" class="form-control" name="email" value="<?php echo (!empty($shop_data) && !empty($shop_data['email']) ? $shop_data['email'] : '' )?>" required>
                        </div>
                         <?php if(!isset($shop_data['shop_id']) && empty($shop_data['shop_id'])){ ?>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                          </div>
                        <?php } ?>
                          <!-- <div class="form-group">
                              <label>Select MemberShip Type</label>
                              <select class="form-control" name="membership-duration">
                                <option value="">Select MemberShip Type</option>
                                <?php if(!empty($membership)){ ?>
                                <?php 
                                foreach ($membership as $shop_type_list2) {
                                  if($shop_data['membership-duration'] == $shop_type_list2['duration']){
                                    $duration="selected";
                                  }else{
                                    $duration="";
                                  }
                                ?>
                                  <option value="<?php echo $shop_type_list2['duration']; ?>" <?php echo $duration; ?>><?php echo $shop_type_list2['duration'];?></option>
                                <?php
                                }
                                ?>
                                <?php
                                }
                                ?>
                              </select>
                          </div>                         -->
                       
                        <!-- <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password" value=""  placeholder="enter passwod">
                        </div> -->
                        
                        <?php if(isset($shop_data['owner_image']) && !empty($shop_data['owner_image'])){ ?>
                          <div class="form-group">
                            <img src="<?php echo base_url()?>uploads/shop_images/shop_owner_images/<?php echo $shop_data['owner_image'];?>" class="img-responsive">
                          </div>
                        <?php  } ?>
                          <div class="form-group">
                            <label>Owner Image</label>
                            <input type="file" name="owner_image" class="form-control" value ="<?php echo (!empty($shop_data) && !empty($shop_data['owner_image']['name']) ? $shop_data['owner_image']['name'] : '' )?>" >
                          </div>
                          <!--isset($_FILES['owner_image']['name']) && !empty($_FILES['owner_image']['name'])-->
                          <div class="form-group">
                            <label>Employer Identification number</label>
                            <input type="text" class="form-control" name="adhar_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['adhar_no']) ? $shop_data['adhar_no'] : '' )?>">
                          </div>
                          <div class="form-group">
                              <label>Employer Identification image (265 * 165 px ) </label>
                              <input type="file" name=" adhar_image" class="form-control">
                          </div>
                        <?php if(isset($shop_data['adhar_image']) && !empty($shop_data['adhar_image'])){ ?>
                            <div class="form-group">
                              <img src="<?php echo base_url()?>uploads/shop_images/adhar_image/<?php echo $shop_data['adhar_image'];?>" class="img-responsive">
                            </div>
                        <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <?php //if(isset($shop_data['shop_id']) && !empty($shop_data['shop_id'])){ ?>
                            <!-- <div class="form-group">
                              <label>GST Number</label>
                              <input type="text" class="form-control" name="gst_number" value="<?php echo (!empty($shop_data) && !empty($shop_data['gst_number']) ? $shop_data['gst_number'] : '' )?>" >
                            </div> -->
                        <?php //}else{ ?>
                                <div class="form-group">
                                  <div class="form-group">
                                  <label>Mobile Number</label><br>
                                 <select name="country_code" class="form-control" style="width:16%; height: 34px;display: initial; float:left;">
                                     
   

                                   <option <?php if(isset($shop_data['country_code']) && !empty($shop_data['country_code']==+1)){echo 'selected';}else{echo ''; }?>>+1</option>
                                    <option <?php if(isset($shop_data['country_code']) && !empty($shop_data['country_code']==+91)){echo 'selected';}else{echo ''; }?>>+91</option>
                                 </select>
                                 <?php 
                                //  if(!empty($shop_data['mobile_no'])){
                                //     $number = $shop_data['mobile_no']; 
                                //     $new_number = $number;
                                //  }else{
                                //      $new_number="";
                                //  }
                                 ?>
                                  <input type="tel" style="width:84%; height: 34px; display: inline-block; float:left" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" name="mobile_no" size="10" value="<?php echo (!empty($shop_data) && !empty($shop_data['mobile_no']) ? $shop_data['mobile_no'] : '' )?>"/>
                                </div>
                                </div>
                        <?php if(isset($shop_data['shop_image_desktop']) && !empty($shop_data['shop_image_desktop'])){ ?>
                            <div class="form-group">
                              <img src="<?php echo base_url()?>uploads/shop_images/shop_image_desktop/<?php echo $shop_data['shop_image_desktop'];?>" class="img-responsive">
                            </div>
                        <?php } ?>
                          <div class="form-group">
                            <label>Shop Image (265 * 165 px ) </label>
                            <input type="file" name="shop_image_mobile" class="form-control" >
                          </div>
                        <div class="form-group">
                          <label>Tax identification number</label>
                          <input type="text" class="form-control" name="pan_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['pan_no']) ? $shop_data['pan_no'] : '' )?>">
                        </div>
                        <div class="form-group">
                          <label>Tax identification number document (265 * 165 px ) </label>
                          <input type="file" name="pan_image" class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>business registered in</label>
                          <input type="text" class="form-control" name="business-registerd" value="<?php echo (!empty($shop_data) && !empty($shop_data['business-registerd']) ? $shop_data['business-registerd'] : '' )?>">
                        </div>

                        <div class="form-group">
                          <label>Chain (owned . operated by parent company)</label>
                          <input type="text" class="form-control" name="chain" value="<?php echo (!empty($shop_data) && !empty($shop_data['chain']) ? $shop_data['chain'] : '' )?>">
                        </div>
                         <div class="form-group">
                          <label>Franchise (corporate brand)</label>
                          <input type="text" class="form-control" name="franchise" value="<?php echo (!empty($shop_data) && !empty($shop_data['franchise']) ? $shop_data['franchise'] : '' )?>">
                        </div>
                       
                        <?php if(isset($shop_data['pan_image']) && !empty($shop_data['pan_image'])){ ?>
                          <div class="form-group">
                            <img src="<?php echo base_url()?>uploads/shop_images/pan_image/<?php echo $shop_data['pan_image'];?>" class="img-responsive">
                          </div>
                        <?php } ?>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <?php
                                if(isset($shop_data['shopping_categories']) && !empty($shop_data['shopping_categories'])){
                                  $shopping_categories = explode(',', $shop_data['shopping_categories']);
                                }
                                $whrc = array('status'=>1,'parent_category_id'=>0);
                                $allcategories = $this->Common_model->GetWhere('categories', $whrc);
                              ?>
                                
                                <label>Categories</label>
                                <select class="form-control select2 catselect" name="shopping_categories[]" multiple="multiple" data-placeholder="Select a categories"
                                        style="width: 100%;" >
                                <?php if(isset($allcategories) && !empty($allcategories)){ 
                                    foreach ($allcategories as $allcategoriesdata){
                                ?>
                                  <option value="<?php echo $allcategoriesdata['category_name']; ?>" <?php echo (isset($shopping_categories) && !empty($shopping_categories) && in_array($allcategoriesdata['category_name'], $shopping_categories) ? 'selected' : '')?>><?php echo $allcategoriesdata['category_name']; ?></option>
                                <?php } } ?>
                                </select>
                              </div>
                          </div>
                          <div class="form-group col-md-6">
                          <label>Years in business</label>
                            <select class="form-control" name="year_business">
                              <option>Choose years in business range </option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='1-4'){echo "selected";}else{echo "";}?>>1-4</option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='5-8'){echo "selected";}else{echo "";}?>>5-8</option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='9-12'){echo "selected";}else{echo "";}?> >9-12</option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='13+'){echo "selected";}else{echo "";}?> >13+</option>
                            </select>
                        </div>
                          <!-- <div class="col-md-6">
                            <div class="form-group">
                              <label>Upload GST <div class="form-group">
                          <label>Years in business</label>
                            <select class="form-control" name="year_business">
                              <option>Choose years in business range </option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='1-4'){echo "selected";}else{echo "";}?>>1-4</option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='5-8'){echo "selected";}else{echo "";}?>>5-8</option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='9-12'){echo "selected";}else{echo "";}?> >9-12</option>
                              <option <?php  if(!empty($shop_data['year_business']) && $shop_data['year_business']=='13+'){echo "selected";}else{echo "";}?> >13+</option>
                            </select>
                        </div>Document</label>
                              <input type="file" name="gst_image" class="form-control" >
                            </div>
                            <?php if(isset($shop_data['gst_image']) && !empty($shop_data['gst_image'])){ ?>
                              <div class="form-group">
                                <img src="<?php echo base_url()?>uploads/shop_images/gst_image/<?php echo $shop_data['gst_image'];?>" class="img-responsive">
                              </div>
                            <?php } ?>
                          </div> -->

                        </div>
                      </div>
                      <div class="col-md-12">
                         <div class="form-group">
                          <label>Short description of nature of business</label>
                          <input name="desc" class="form-control" value="<?php echo (!empty($shop_data) && !empty($shop_data['desc']) ? $shop_data['desc'] : '' )?>" required>
                          </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input name="shop_address" class="form-control"  id="pac-input" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_address']) ? $shop_data['shop_address'] : '' )?>">
                        </div>
                      </div>
                      <div class="col-md-12" style="padding: 0px">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" name="shop_latitude"  class="form-control" id="latitude"  value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_latitude']) ? $shop_data['shop_latitude'] : "" )?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Longitude</label>
                            <input type="text" name="shop_longitude"  class="form-control" id="longitude"  value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_longitude']) ? $shop_data['shop_longitude'] : "" )?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12" style="height: 243px;" id="gmap"></div>
                      <div id="infowindow-content">
                        <img src="" width="16" height="16" id="place-icon">
                        <!-- <span id="place-name"  class="title">Indore</span><br> -->
                        <span id="place-address"><?php echo (!empty($shop_data) && !empty($shop_data['address']) ? $shop_data['address'] : "" )?></span>
                      </div>
                  </div>
                  <div class="tab-pane" id="addbank" style="margin: 10px">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Account Holder Name</label>
                            <input type="text" class="form-control" name="account_holder_name" value="<?php echo (!empty($shop_data) && !empty($shop_data['account_holder_name']) ? $shop_data['account_holder_name'] : "" )?>" >
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Routing number</label>
                          <input type="text" class="form-control" name="routing-number" value="<?php echo (!empty($shop_data) && !empty($shop_data['routing-number']) ? $shop_data['routing-number'] : "" )?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Account Number</label>
                          <input type="text" class="form-control" name="bank_acc_no" value="<?php echo (!empty($shop_data) && !empty($shop_data['bank_acc_no']) ? $shop_data['bank_acc_no'] : "" )?>" >
                        </div>
                      </div>
                     <!--  <div class="col-md-6">
                        <div class="form-group">
                          <label>IfSC CODE</label>
                          <input type="text" class="form-control" name="bank_ifsc_code" value="<?php echo (!empty($shop_data) && !empty($shop_data['bank_ifsc_code']) ? $shop_data['bank_ifsc_code'] : "" )?>" >
                        </div>
                      </div> -->
                     <!--  <div class="col-md-6">
                        <div class="form-group">
                          <label>Branch</label>
                          <input type="text" class="form-control" name="bank_branch" value="<?php echo (!empty($shop_data) && !empty($shop_data['bank_branch']) ? $shop_data['bank_branch'] : "" )?>">
                        </div>
                      </div> -->
                      <?php if(isset($shop_data['cancel_check_image']) && !empty($shop_data['cancel_check_image'])){ ?>
                          <div class="col-md-12">
                            <img src="<?php echo base_url()?>uploads/shop_images/cancel_check_images/<?php echo $shop_data['cancel_check_image'];?>" class="img-responsive">
                          </div>
                        <?php  } ?>
                      <!-- <div class="col-md-6">
                        <label>Cancel Check Image</label>
                        <input type="file" name="cancel_check_image" class="form-control">
                      </div> -->
                  </div>
                 <!--  <div class="tab-pane" id="gumasta" style="margin: 10px">
                      <?php if(isset($shop_data['owner_image']) && !empty($shop_data['owner_image'])){ ?>
                        <div class="form-group">
                          <img src="<?php echo base_url()?>uploads/shop_images/gumasta_images/<?php echo $shop_data['gumasta_image'];?>" class="img-responsive">
                        </div>
                      <?php  } ?>
                      <div class="form-group">
                        <label>Employer Registration Number</label>
                        <input type="file" name="gumasta_image" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc"><?php echo !empty($shop_data['desccription']) ? $shop_data['desccription'] : ''; ?></textarea>
                      </div>
                  </div> -->
                </div>
                <div class="col-md-12" style="margin: 10px">
                  <?php if(isset($shop_data['shop_id']) && !empty($shop_data['shop_id'])){ ?>
                    <input type="hidden" name="shop_id" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_id']) ? $shop_data['shop_id'] : "" )?>">
                    <button type="submit" name="update"  class="btn btn-primary pull-right">Update</button>
                  <?PHP  }else{ ?>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                  <?php } ?>
                </div>
              </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="../shop/js/intlTelInput.js"></script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlk9jl3b8NvuKXQm6rft78c5T_PLe7gRg&libraries=places&callback=initMap" async defer></script>
 -->
<script src="<?php echo base_url(); ?>backend_assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1jqCFvq7QWDreBKSOQi0tgL6wYBdXbWA&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
$(document).ready(function(){
    //Initialize Select2 Elements
    $(".catselect").on("change", function(){
        var cat = $(this).val();
        // alert(cat);
        // console.log(cat);

        $.ajax({
              type: "POST",
              url: "<?php echo base_url()?>adminnew/subcatbycatname",
              data: {cat:cat},
              dataType: "html",
              success : function(data){
                  // alert(data);
                  $('.specialsubcat').html(data);
              },
              error: function(data) {
                  $.notify(data.msg, "Empty");
              },
          });
      });
    $('.select2').select2();
    $('.mdb-select').materialSelect();
    $('#basicExample').timepicker({
      timeFormat: 'HH:mm',
      startTime: '07:00',
      minTime: '07:00', // 11:45:00 AM,
      maxHour: 23,
      interval: 30 
    });

    $('#basicExampleclose').timepicker({
      timeFormat: 'H:mm',
      startTime: '07:00',
      minTime: '07:00', // 11:45:00 AM,
      maxHour: 23,
      interval: 30 
    });


});
  </script>
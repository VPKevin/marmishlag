<div class="recette card">
  <?= get_the_post_thumbnail(); ?>
  <div class="card-body">
    <p class="card-text"><?= the_author() ?></p>
    <h5 class="card-title">
        <span><?= the_title() ?></span>
        <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.7477 1.28571V15.9107L6.50833 13.6029L5.97094 13.3136L5.43356 13.6029L1.19419 15.9107V1.28571H10.7477ZM10.7477 0H1.19419C0.87747 0 0.573724 0.135459 0.34977 0.376577C0.125816 0.617695 0 0.944722 0 1.28571V18L5.97094 14.7857L11.9419 18V1.28571C11.9419 0.944722 11.8161 0.617695 11.5921 0.376577C11.3682 0.135459 11.0644 0 10.7477 0Z" fill="#9DA3AE"/>
        </svg>
    </h5>
    <div class="row caracteristics">
        <div class="col temps-recette">
            <svg width="16" style="overflow: visible; transform: translateY(18%);" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="#E17C78" style="transform: translate(33%, -18%);" d="M1.57839 6.5625H2.85551V12.75H1.57839V6.5625ZM0.30127 0.375H4.13263V1.75H0.30127V0.375Z" />
                <path fill="#E17C78" d="M14.8795 2.18752L13.9727 1.21814L12.536 2.76502C11.3599 1.30273 9.70571 0.384502 7.91716 0.201128C6.12862 0.0177543 4.34321 0.583328 2.9319 1.78034C1.52059 2.97735 0.591888 4.71377 0.338753 6.62881C0.0856177 8.54384 0.527512 10.4903 1.57262 12.0636C2.61773 13.637 4.1857 14.7164 5.95076 15.0775C7.71581 15.4386 9.54222 15.0537 11.0505 14.0027C12.5588 12.9517 13.6331 11.3155 14.05 9.43399C14.467 7.55247 14.1946 5.57032 13.2895 3.89939L14.8795 2.18752ZM7.21677 13.875C6.08011 13.875 4.96898 13.5121 4.02389 12.8322C3.07879 12.1523 2.34218 11.186 1.9072 10.0554C1.47222 8.92475 1.35841 7.68065 1.58016 6.4804C1.80191 5.28014 2.34926 4.17763 3.153 3.31229C3.95674 2.44696 4.98076 1.85765 6.09558 1.61891C7.21039 1.38016 8.36593 1.5027 9.41606 1.97101C10.4662 2.43933 11.3638 3.2324 11.9953 4.24993C12.6267 5.26745 12.9638 6.46374 12.9638 7.68752C12.9638 9.32854 12.3583 10.9024 11.2805 12.0627C10.2028 13.2231 8.74098 13.875 7.21677 13.875Z" />
            </svg>
            <p><?php do_action('marmiplug-duration'); ?></p>
        </div>
        <div class="col difficulte-recette">
            <?php do_action('marmiplug-difficulty'); ?>
        </div>
        <div class="col note-recette">
            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.52874 3.4825L11.2912 7.31875L11.5849 8.00625L12.2235 8.10938L16.157 8.72125L13.3601 11.6775L12.8812 12.1794L12.9961 12.8669L13.6666 17.0812L10.1481 15.0944L9.52874 14.8125L8.93488 15.1494L5.41642 17.1087L6.05498 12.8944L6.16992 12.2069L5.69739 11.6775L2.87496 8.68688L6.80848 8.075L7.44704 7.97188L7.74078 7.28438L9.52874 3.4825ZM9.52874 0.375L6.6233 6.71375L0.12915 7.72437L4.82895 12.6606L3.71785 19.625L9.52874 16.3387L15.3396 19.625L14.2285 12.6606L18.9283 7.73125L12.4342 6.71375L9.52874 0.375Z" fill="#E17C78"/>
            </svg>
            <p>4.5</p>
        </div>
    </div>
  </div>
</div>

<style>
    .products_page .category {
        padding: 20px 0 20px 2px;
    }
    .products_page .b-gray {
        background-color: #f6f6f6;
    }
    .products_page .category h3 {
        padding-bottom: 15px;
    }

    .products_page .t-blue {
        color: #107dac;
    }
    .products_page .category ul {
        padding: 0;
        margin: 0;
    }
    .products_page .category ul li {
        list-style: none;
        background: #fff;
        border-right: solid 4px #f6f6f6;
        margin-top: 2px;
    }
    .products_page .category ul li.active {
        background: #107dac;
        border-right: solid 8px #107dac;
    }
    .products_page .category ul li.active a{
        color: #fff;
    }
    
    .products_page .category ul li.active a,.products_page .category ul li.active a:hover {
        color: #fff;
    }
    .products_page .category ul li a {
        color: #000;
        width: 100%;
        padding: 10px 20px;
        display: inline-block;
        vertical-align: middle;
    }
    .products_page .float-100 {
        float: left;
        width: 100%;
    }
    .products_page .inline-block-100 {
        display: inline-block;
        width: 100%;
    }
    .products_page .list {
        /* padding: 20px 0 0 0; */
        margin: 0px -1px;
        display: flex;
        flex-flow: row wrap;
    }
    .products_page .list li {
        display: flex;
        float: left;
        width: 25%;
        margin: -1px;
    }
    .products_page .list li .text {
        border: solid 1px #ebebeb;
        background: #F6F6F6;
        padding: 8px;
        text-align: center;
        color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .products_page .list li .text a {
        color: #000;
    }
    @media (max-width: 767px){
        .products_page .list li {
            width: 50%;
        }
    }




    .about-time-line {

    }
    .about-time-line ul {
    --col-gap: 2rem;
    --row-gap: 2rem;
    --line-w: 0.25rem;
    display: grid;
    grid-template-columns: var(--line-w) 1fr;
    grid-auto-columns: max-content;
    column-gap: var(--col-gap);
    list-style: none;
    width: min(60rem, 90%);
    margin-inline: auto;
    }

    /* line */
    .about-time-line ul::before {
    content: "";
    grid-column: 1;
    grid-row: 1 / span 20;
    background: rgb(225, 225, 225);
    border-radius: calc(var(--line-w) / 2);
    }

    /* columns*/

    /* row gaps */
    .about-time-line ul li:not(:last-child) {
    margin-bottom: var(--row-gap);
    }

    /* card */
    .about-time-line ul li {
    grid-column: 2;
    --inlineP: 1.5rem;
    margin-inline: var(--inlineP);
    grid-row: span 2;
    display: grid;
    grid-template-rows: min-content min-content min-content;
    }

    /* date */
    .about-time-line ul li .date {
    --dateH: 3rem;
    height: var(--dateH);
    margin-inline: calc(var(--inlineP) * -1);

    text-align: center;
    background-color: var(--accent-color);

    color: white;
    font-size: 1.25rem;
    font-weight: 700;

    display: grid;
    place-content: center;
    position: relative;

    border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
    }

    /* date flap */
    .about-time-line ul li .date::before {
    content: "";
    width: var(--inlineP);
    aspect-ratio: 1;
    background: var(--accent-color);
    background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
    position: absolute;
    top: 100%;

    clip-path: polygon(0 0, 100% 0, 0 100%);
    right: 0;
    }

    /* circle */
    .about-time-line ul li .date::after {
    content: "";
    position: absolute;
    width: 2rem;
    aspect-ratio: 1;
    background: var(--bgColor);
    border: 0.3rem solid var(--accent-color);
    border-radius: 50%;
    top: 50%;

    transform: translate(50%, -50%);
    right: calc(100% + var(--col-gap) + var(--line-w) / 2);
    }

    /* title descr */
    .about-time-line ul li .title,
    .about-time-line ul li .descr {
    background: var(--bgColor);
    position: relative;
    padding-inline: 1.5rem;
    }
    .about-time-line ul li .title {
    overflow: hidden;
    padding-block-start: 1.5rem;
    padding-block-end: 1rem;
    font-size: 18px;
    font-weight: 500;
    }
    .about-time-line ul li .descr {
    padding-block-end: 1.5rem;
    font-weight: 300;
    }

    /* shadows */
    .about-time-line ul li .title::before,
    .about-time-line ul li .descr::before {
    content: "";
    position: absolute;
    width: 90%;
    height: 0.5rem;
    background: rgba(0, 0, 0, 0.5);
    left: 50%;
    border-radius: 50%;
    filter: blur(4px);
    transform: translate(-50%, 50%);
    }
    .about-time-line ul li .title::before {
    bottom: calc(100% + 0.125rem);
    }

    .about-time-line ul li .descr::before {
    z-index: -1;
    bottom: 0.25rem;
    }

    @media (min-width: 40rem) {
        .about-time-line ul {
        grid-template-columns: 1fr var(--line-w) 1fr;
    }
    .about-time-line ul::before {
        grid-column: 2;
    }
    .about-time-line ul li:nth-child(odd) {
        grid-column: 1;
    }
    .about-time-line ul li:nth-child(even) {
        grid-column: 3;
    }

    /* start second card */
    .about-time-line ul li:nth-child(2) {
        grid-row: 2/4;
    }

    .about-time-line ul li:nth-child(odd) .date::before {
        clip-path: polygon(0 0, 100% 0, 100% 100%);
        left: 0;
    }

    .about-time-line ul li:nth-child(odd) .date::after {
        transform: translate(-50%, -50%);
        left: calc(100% + var(--col-gap) + var(--line-w) / 2);
    }
    .about-time-line ul li:nth-child(odd) .date {
        border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
    }
    }


    .about-home-block h3{
        font-size: 16px;
    }
    .section-title{
        max-width: 100%;
    }
    .pt-100{
        padding-top: 50px;
    }
    .pb-70{
        padding-bottom: 50px;
    }
    .product-details-desc .top-title {
        color: #107dac;
        font-size: 14px;
        display: block;
        margin-bottom: 10px;
        font-weight: 500;
    }
    .contact-info-area .single-contact-info h3{
        font-size: 14px;
    }
</style>
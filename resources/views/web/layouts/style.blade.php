<style>
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
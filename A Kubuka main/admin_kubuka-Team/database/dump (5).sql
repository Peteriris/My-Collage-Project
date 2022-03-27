--
-- PostgreSQL database dump
--

-- Dumped from database version 12.9
-- Dumped by pg_dump version 12.9

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: admlogin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.admlogin (
    id character varying NOT NULL,
    users character varying,
    password character varying
);


ALTER TABLE public.admlogin OWNER TO postgres;

--
-- Name: cities; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cities (
    city_id integer NOT NULL,
    state_id integer,
    city_name character varying,
    status character varying
);


ALTER TABLE public.cities OWNER TO postgres;

--
-- Name: cities_city_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cities_city_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cities_city_id_seq OWNER TO postgres;

--
-- Name: cities_city_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cities_city_id_seq OWNED BY public.cities.city_id;


--
-- Name: countries; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.countries (
    country_id integer NOT NULL,
    country_name character varying,
    status character varying
);


ALTER TABLE public.countries OWNER TO postgres;

--
-- Name: countries_country_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.countries_country_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.countries_country_id_seq OWNER TO postgres;

--
-- Name: countries_country_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.countries_country_id_seq OWNED BY public.countries.country_id;


--
-- Name: hotelregispricelist; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotelregispricelist (
    id integer NOT NULL,
    price double precision,
    status character varying
);


ALTER TABLE public.hotelregispricelist OWNER TO postgres;

--
-- Name: hotelRegispricelist_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."hotelRegispricelist_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."hotelRegispricelist_id_seq" OWNER TO postgres;

--
-- Name: hotelRegispricelist_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."hotelRegispricelist_id_seq" OWNED BY public.hotelregispricelist.id;


--
-- Name: hoteldetails; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hoteldetails (
    id integer NOT NULL,
    pho1 character varying(30) NOT NULL,
    pho2 character varying(40) NOT NULL,
    discreption character varying(350),
    liceid character varying(40),
    regroom integer NOT NULL,
    hot_regi_id integer
);


ALTER TABLE public.hoteldetails OWNER TO postgres;

--
-- Name: hoteldetails_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hoteldetails_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hoteldetails_id_seq OWNER TO postgres;

--
-- Name: hoteldetails_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hoteldetails_id_seq OWNED BY public.hoteldetails.id;


--
-- Name: hoteldetails_pho1_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hoteldetails_pho1_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hoteldetails_pho1_seq OWNER TO postgres;

--
-- Name: hoteldetails_pho1_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hoteldetails_pho1_seq OWNED BY public.hoteldetails.pho1;


--
-- Name: hoteldetails_pho2_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hoteldetails_pho2_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hoteldetails_pho2_seq OWNER TO postgres;

--
-- Name: hoteldetails_pho2_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hoteldetails_pho2_seq OWNED BY public.hoteldetails.pho2;


--
-- Name: hoteldetails_regroom_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hoteldetails_regroom_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hoteldetails_regroom_seq OWNER TO postgres;

--
-- Name: hoteldetails_regroom_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hoteldetails_regroom_seq OWNED BY public.hoteldetails.regroom;


--
-- Name: hotelimages; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotelimages (
    image_id integer NOT NULL,
    image_name character varying(300),
    hotel_id integer
);


ALTER TABLE public.hotelimages OWNER TO postgres;

--
-- Name: hotelimages_image_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelimages_image_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelimages_image_id_seq OWNER TO postgres;

--
-- Name: hotelimages_image_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelimages_image_id_seq OWNED BY public.hotelimages.image_id;


--
-- Name: hotelphotouplode; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotelphotouplode (
    id integer NOT NULL,
    logo character varying,
    hot_regi_id integer
);


ALTER TABLE public.hotelphotouplode OWNER TO postgres;

--
-- Name: hotelphotouplode_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelphotouplode_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelphotouplode_id_seq OWNER TO postgres;

--
-- Name: hotelphotouplode_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelphotouplode_id_seq OWNED BY public.hotelphotouplode.id;


--
-- Name: hotelregis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotelregis (
    id integer NOT NULL,
    hotelname character varying(100) NOT NULL,
    place character varying(30),
    pincode integer NOT NULL,
    star character varying(20),
    statuse character varying(10),
    districtid integer,
    locations character varying(300)
);


ALTER TABLE public.hotelregis OWNER TO postgres;

--
-- Name: hotelregis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelregis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelregis_id_seq OWNER TO postgres;

--
-- Name: hotelregis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelregis_id_seq OWNED BY public.hotelregis.id;


--
-- Name: hotelregis_pincode_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelregis_pincode_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelregis_pincode_seq OWNER TO postgres;

--
-- Name: hotelregis_pincode_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelregis_pincode_seq OWNED BY public.hotelregis.pincode;


--
-- Name: hotelspec; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotelspec (
    id integer NOT NULL,
    ac character varying(25),
    nonac character varying(25),
    sbed character varying(25),
    dbed character varying(25),
    cbed character varying(25),
    pre character varying(25),
    mine integer NOT NULL,
    maxe integer NOT NULL
);


ALTER TABLE public.hotelspec OWNER TO postgres;

--
-- Name: hotelspec_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelspec_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelspec_id_seq OWNER TO postgres;

--
-- Name: hotelspec_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelspec_id_seq OWNED BY public.hotelspec.id;


--
-- Name: hotelspec_max_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelspec_max_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelspec_max_seq OWNER TO postgres;

--
-- Name: hotelspec_max_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelspec_max_seq OWNED BY public.hotelspec.maxe;


--
-- Name: hotelspec_min_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelspec_min_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelspec_min_seq OWNER TO postgres;

--
-- Name: hotelspec_min_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelspec_min_seq OWNED BY public.hotelspec.mine;


--
-- Name: hotelspecialization; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotelspecialization (
    id integer NOT NULL,
    hotelid integer,
    specid integer
);


ALTER TABLE public.hotelspecialization OWNER TO postgres;

--
-- Name: hotelspecialization_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotelspecialization_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotelspecialization_id_seq OWNER TO postgres;

--
-- Name: hotelspecialization_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotelspecialization_id_seq OWNED BY public.hotelspecialization.id;


--
-- Name: hoteluserlogin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hoteluserlogin (
    id integer NOT NULL,
    hotusername character varying,
    email character varying,
    passwords character varying,
    hot_regi_id integer
);


ALTER TABLE public.hoteluserlogin OWNER TO postgres;

--
-- Name: hoteluserlogin_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hoteluserlogin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hoteluserlogin_id_seq OWNER TO postgres;

--
-- Name: hoteluserlogin_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hoteluserlogin_id_seq OWNED BY public.hoteluserlogin.id;


--
-- Name: roomadding; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.roomadding (
    id integer NOT NULL,
    roomno character varying(30),
    floorno character varying(10),
    dic character varying(30),
    minprice double precision,
    maxprice double precision,
    hotelid integer NOT NULL,
    room_type character varying(25),
    category character varying(25)
);


ALTER TABLE public.roomadding OWNER TO postgres;

--
-- Name: roomadding_hotelid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.roomadding_hotelid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roomadding_hotelid_seq OWNER TO postgres;

--
-- Name: roomadding_hotelid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roomadding_hotelid_seq OWNED BY public.roomadding.hotelid;


--
-- Name: roomadding_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.roomadding_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roomadding_id_seq OWNER TO postgres;

--
-- Name: roomadding_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roomadding_id_seq OWNED BY public.roomadding.id;


--
-- Name: roomaddingphoto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.roomaddingphoto (
    id integer NOT NULL,
    photo character varying(500),
    roomid integer NOT NULL
);


ALTER TABLE public.roomaddingphoto OWNER TO postgres;

--
-- Name: roomaddingphoto_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.roomaddingphoto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roomaddingphoto_id_seq OWNER TO postgres;

--
-- Name: roomaddingphoto_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roomaddingphoto_id_seq OWNED BY public.roomaddingphoto.id;


--
-- Name: roomaddingphoto_roomid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.roomaddingphoto_roomid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roomaddingphoto_roomid_seq OWNER TO postgres;

--
-- Name: roomaddingphoto_roomid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roomaddingphoto_roomid_seq OWNED BY public.roomaddingphoto.roomid;


--
-- Name: specilizations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.specilizations (
    specid integer NOT NULL,
    specilization character varying(75)
);


ALTER TABLE public.specilizations OWNER TO postgres;

--
-- Name: specilizations_	specid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."specilizations_	specid_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."specilizations_	specid_seq" OWNER TO postgres;

--
-- Name: specilizations_	specid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."specilizations_	specid_seq" OWNED BY public.specilizations.specid;


--
-- Name: states; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.states (
    state_id integer NOT NULL,
    country_id integer,
    state_name character varying,
    status character varying
);


ALTER TABLE public.states OWNER TO postgres;

--
-- Name: states_state_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.states_state_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.states_state_id_seq OWNER TO postgres;

--
-- Name: states_state_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.states_state_id_seq OWNED BY public.states.state_id;


--
-- Name: userbooking; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.userbooking (
    id integer NOT NULL,
    cindate date,
    coutdate date,
    menb character varying,
    usid integer,
    hotelid integer,
    roomid integer,
    statuss character varying
);


ALTER TABLE public.userbooking OWNER TO postgres;

--
-- Name: userbooking_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.userbooking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.userbooking_id_seq OWNER TO postgres;

--
-- Name: userbooking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.userbooking_id_seq OWNED BY public.userbooking.id;


--
-- Name: userlogin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.userlogin (
    id integer NOT NULL,
    uname character varying,
    email character varying,
    password character varying
);


ALTER TABLE public.userlogin OWNER TO postgres;

--
-- Name: userlogin_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.userlogin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.userlogin_id_seq OWNER TO postgres;

--
-- Name: userlogin_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.userlogin_id_seq OWNED BY public.userlogin.id;


--
-- Name: cities city_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cities ALTER COLUMN city_id SET DEFAULT nextval('public.cities_city_id_seq'::regclass);


--
-- Name: countries country_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.countries ALTER COLUMN country_id SET DEFAULT nextval('public.countries_country_id_seq'::regclass);


--
-- Name: hoteldetails id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteldetails ALTER COLUMN id SET DEFAULT nextval('public.hoteldetails_id_seq'::regclass);


--
-- Name: hoteldetails pho1; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteldetails ALTER COLUMN pho1 SET DEFAULT nextval('public.hoteldetails_pho1_seq'::regclass);


--
-- Name: hoteldetails pho2; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteldetails ALTER COLUMN pho2 SET DEFAULT nextval('public.hoteldetails_pho2_seq'::regclass);


--
-- Name: hoteldetails regroom; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteldetails ALTER COLUMN regroom SET DEFAULT nextval('public.hoteldetails_regroom_seq'::regclass);


--
-- Name: hotelimages image_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelimages ALTER COLUMN image_id SET DEFAULT nextval('public.hotelimages_image_id_seq'::regclass);


--
-- Name: hotelphotouplode id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelphotouplode ALTER COLUMN id SET DEFAULT nextval('public.hotelphotouplode_id_seq'::regclass);


--
-- Name: hotelregis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelregis ALTER COLUMN id SET DEFAULT nextval('public.hotelregis_id_seq'::regclass);


--
-- Name: hotelregis pincode; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelregis ALTER COLUMN pincode SET DEFAULT nextval('public.hotelregis_pincode_seq'::regclass);


--
-- Name: hotelregispricelist id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelregispricelist ALTER COLUMN id SET DEFAULT nextval('public."hotelRegispricelist_id_seq"'::regclass);


--
-- Name: hotelspec id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelspec ALTER COLUMN id SET DEFAULT nextval('public.hotelspec_id_seq'::regclass);


--
-- Name: hotelspec mine; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelspec ALTER COLUMN mine SET DEFAULT nextval('public.hotelspec_min_seq'::regclass);


--
-- Name: hotelspec maxe; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelspec ALTER COLUMN maxe SET DEFAULT nextval('public.hotelspec_max_seq'::regclass);


--
-- Name: hotelspecialization id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelspecialization ALTER COLUMN id SET DEFAULT nextval('public.hotelspecialization_id_seq'::regclass);


--
-- Name: hoteluserlogin id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteluserlogin ALTER COLUMN id SET DEFAULT nextval('public.hoteluserlogin_id_seq'::regclass);


--
-- Name: roomadding id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roomadding ALTER COLUMN id SET DEFAULT nextval('public.roomadding_id_seq'::regclass);


--
-- Name: roomadding hotelid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roomadding ALTER COLUMN hotelid SET DEFAULT nextval('public.roomadding_hotelid_seq'::regclass);


--
-- Name: roomaddingphoto id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roomaddingphoto ALTER COLUMN id SET DEFAULT nextval('public.roomaddingphoto_id_seq'::regclass);


--
-- Name: roomaddingphoto roomid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roomaddingphoto ALTER COLUMN roomid SET DEFAULT nextval('public.roomaddingphoto_roomid_seq'::regclass);


--
-- Name: specilizations specid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.specilizations ALTER COLUMN specid SET DEFAULT nextval('public."specilizations_	specid_seq"'::regclass);


--
-- Name: states state_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.states ALTER COLUMN state_id SET DEFAULT nextval('public.states_state_id_seq'::regclass);


--
-- Name: userbooking id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.userbooking ALTER COLUMN id SET DEFAULT nextval('public.userbooking_id_seq'::regclass);


--
-- Name: userlogin id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.userlogin ALTER COLUMN id SET DEFAULT nextval('public.userlogin_id_seq'::regclass);


--
-- Data for Name: admlogin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.admlogin (id, users, password) FROM stdin;
1	anto	anto
2	aljo	aljo
3	albin	albin
4	akhil	akhil
\.


--
-- Data for Name: cities; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cities (city_id, state_id, city_name, status) FROM stdin;
1	1	thrisuur	1
3	2	chennai	1
4	2	madhurai	1
5	3	batticaloa	1
6	3	ampara	1
7	4	gerbia	1
8	4	berhampur	1
9	1	Alappuzha	1
10	1	Ernakulam	1
11	1	Idukki	1
12	1	Kannur	1
13	1	Kasaragod	1
14	1	Kollam	1
15	1	Kottayam	1
16	1	Kozhikode	1
17	1	Malappuram	1
18	1	Palakkad	1
19	1	Pathanamthitta	1
20	1	Wayanad	1
2	1	Thiruvananthapuram	1
\.


--
-- Data for Name: countries; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.countries (country_id, country_name, status) FROM stdin;
1	india	1
2	sreelanka	1
3	nepal	1
\.


--
-- Data for Name: hoteldetails; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hoteldetails (id, pho1, pho2, discreption, liceid, regroom, hot_regi_id) FROM stdin;
29	0484 719 3333	0484 719 3332	Warm quarters in an upmarket hotel with a free airport shuttle, plus a restaurant & a rooftop pool.	KL/EARK/168924	4	34
30	+91-4829 271350	+91-4829 271350	Classic hotel offering warm rooms in restored buildings & historic replicas, plus a restaurant	KL/EARK/2689227	2	35
31	0495 241 1111	0495 241 1112	Sophisticated hotel offering 4 restaurants & a bar, as well as an outdoor pool, a gym & a spa.\r\n	KL/EARK/3519237	2	36
\.


--
-- Data for Name: hotelimages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotelimages (image_id, image_name, hotel_id) FROM stdin;
20	multpotp/WhatsApp Image 2022-03-07 at 2.13.14 PM.jpeg	34
21	multpotp/WhatsApp Image 2022-03-07 at 2.13.15 PM (1).jpeg	34
22	multpotp/WhatsApp Image 2022-03-07 at 2.13.11 PM.jpeg	35
23	multpotp/WhatsApp Image 2022-03-07 at 2.13.12 PM (1).jpeg	35
24	multpotp/WhatsApp Image 2022-03-07 at 2.13.19 PM (1).jpeg	36
25	multpotp/WhatsApp Image 2022-03-07 at 2.13.19 PM.jpeg	36
\.


--
-- Data for Name: hotelphotouplode; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotelphotouplode (id, logo, hot_regi_id) FROM stdin;
26	uplode/portmusiles.png	34
27	uplode/WhatsApp Image 2022-03-07 at 2.13.22 PM (1).jpeg	35
28	uplode/WhatsApp Image 2022-03-07 at 2.13.21 PM.jpeg	36
\.


--
-- Data for Name: hotelregis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotelregis (id, hotelname, place, pincode, star, statuse, districtid, locations) FROM stdin;
34	Port Muziris, a Tribute Portfolio Hotel	kochi	683572	⭐ ⭐ ⭐ ⭐ ⭐	Active	10	Vip Road Opposite Kochi International Airport Nedumbassery
35	Soma Kerala Palace	kochi	686615	⭐ ⭐ ⭐	Active	10	Kumarakom Near Murinjupuzha, Chempu P.O. Vaikom, Cochin College Rd, Chullickal, Kochi
36	The Raviz Kadavu	kozhikode	673632	⭐ ⭐ ⭐ ⭐⭐	Active	16	NH 17, Bypass, Road, Azhinjilam, Kozhikode
\.


--
-- Data for Name: hotelregispricelist; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotelregispricelist (id, price, status) FROM stdin;
1	500	active
2	600	active
3	700	active
4	800	active\n
5	900	active
6	1000	active
7	1100	active
8	1200	active
9	1300	active
10	1400	active
11	1500	active
12	1600	active
13	1700	active
14	1800	active
15	1900	active
16	2000	active
17	2100	active
19	2300	active
20	2400	active
21	2500	active
22	2600	active
23	2700	active
24	2800	active
25	2900	active
26	3000	active
18	2200	active
27	3500	active
28	4000	active
29	4500	active
30	5000	active
31	5500	active
32	6000	active
\.


--
-- Data for Name: hotelspec; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotelspec (id, ac, nonac, sbed, dbed, cbed, pre, mine, maxe) FROM stdin;
\.


--
-- Data for Name: hotelspecialization; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotelspecialization (id, hotelid, specid) FROM stdin;
11	34	2
12	34	5
13	34	7
14	35	1
15	35	3
16	35	5
17	35	10
18	35	12
19	36	1
20	36	3
21	36	5
22	36	8
23	36	9
\.


--
-- Data for Name: hoteluserlogin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hoteluserlogin (id, hotusername, email, passwords, hot_regi_id) FROM stdin;
69	Port Muziris	PortMuziris@gmail.com	Port Muziris	34
71	SomaKeralaPalace	SomaKeralaPalace@gmail.com	SomaKeralaPalace	35
72	TheRavizKadavu	TheRavizKadavu@gmail.com	TheRavizKadavu	36
\.


--
-- Data for Name: roomadding; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roomadding (id, roomno, floorno, dic, minprice, maxprice, hotelid, room_type, category) FROM stdin;
22	104	2	homily  service	5000	6000	34	A/C	Luxury Room
23	204	3B	Nice room	2500	3000	35	A/C	Family Room
24	104	5A	Top floor	5000	6000	36	A/C	Superior Room
25	325	3	sea view	1100	1500	35	A/C	Suite
\.


--
-- Data for Name: roomaddingphoto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roomaddingphoto (id, photo, roomid) FROM stdin;
6	roomphoto/WhatsApp Image 2022-03-07 at 2.13.20 PM.jpeg	22
7	roomphoto/WhatsApp Image 2022-03-07 at 2.13.14 PM.jpeg	23
8	roomphoto/WhatsApp Image 2022-03-07 at 2.13.20 PM.jpeg	24
9	roomphoto/room-3.jpg	25
\.


--
-- Data for Name: specilizations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.specilizations (specid, specilization) FROM stdin;
1	Parking
2	Swimming pool/jacuzzi
3	Wifi
4	Laundry service
5	Food service
6	SoftDrinks
7	Party hall
8	 Smoking area
9	 Pet friendly
10	Poolside bar
11	Spa
12	pool
\.


--
-- Data for Name: states; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.states (state_id, country_id, state_name, status) FROM stdin;
1	1	kerala	1
2	1	tamilnadu	1
3	2	colombo	1
4	2	anuradhapura	1
\.


--
-- Data for Name: userbooking; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.userbooking (id, cindate, coutdate, menb, usid, hotelid, roomid, statuss) FROM stdin;
3	2022-08-03	2022-10-03	2 Adult	1	34	22	active
5	2022-08-03	2022-10-03	2 Adult	1	22	34	\N
\.


--
-- Data for Name: userlogin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.userlogin (id, uname, email, password) FROM stdin;
1	Anto	antonybabuarimbo@gmail.com	123456
3	Aljo	aljojhony@gmail.com	1234
4	Albin	albin@gmail.com	123456
2	Antony	antonybabuarimboo@gmail.com	123456
5	Albin Babu	albin8055@gmail.com	123456
6	Alex	alex@gmail.com	321654
7	Nirmal	nirmal@gmail.com	654321
\.


--
-- Name: cities_city_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cities_city_id_seq', 20, true);


--
-- Name: countries_country_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.countries_country_id_seq', 3, true);


--
-- Name: hotelRegispricelist_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."hotelRegispricelist_id_seq"', 32, true);


--
-- Name: hoteldetails_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hoteldetails_id_seq', 31, true);


--
-- Name: hoteldetails_pho1_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hoteldetails_pho1_seq', 1, false);


--
-- Name: hoteldetails_pho2_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hoteldetails_pho2_seq', 1, false);


--
-- Name: hoteldetails_regroom_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hoteldetails_regroom_seq', 1, false);


--
-- Name: hotelimages_image_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelimages_image_id_seq', 25, true);


--
-- Name: hotelphotouplode_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelphotouplode_id_seq', 28, true);


--
-- Name: hotelregis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelregis_id_seq', 36, true);


--
-- Name: hotelregis_pincode_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelregis_pincode_seq', 1, false);


--
-- Name: hotelspec_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelspec_id_seq', 9, true);


--
-- Name: hotelspec_max_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelspec_max_seq', 1, false);


--
-- Name: hotelspec_min_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelspec_min_seq', 1, false);


--
-- Name: hotelspecialization_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotelspecialization_id_seq', 23, true);


--
-- Name: hoteluserlogin_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hoteluserlogin_id_seq', 72, true);


--
-- Name: roomadding_hotelid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roomadding_hotelid_seq', 1, false);


--
-- Name: roomadding_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roomadding_id_seq', 25, true);


--
-- Name: roomaddingphoto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roomaddingphoto_id_seq', 9, true);


--
-- Name: roomaddingphoto_roomid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roomaddingphoto_roomid_seq', 1, false);


--
-- Name: specilizations_	specid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."specilizations_	specid_seq"', 12, true);


--
-- Name: states_state_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.states_state_id_seq', 1, false);


--
-- Name: userbooking_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.userbooking_id_seq', 5, true);


--
-- Name: userlogin_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.userlogin_id_seq', 7, true);


--
-- Name: cities cities_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cities
    ADD CONSTRAINT cities_pkey PRIMARY KEY (city_id);


--
-- Name: countries countries_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.countries
    ADD CONSTRAINT countries_pkey PRIMARY KEY (country_id);


--
-- Name: hotelregispricelist hotelRegispricelist_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelregispricelist
    ADD CONSTRAINT "hotelRegispricelist_pkey" PRIMARY KEY (id);


--
-- Name: hoteldetails hoteldetails_liceid_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteldetails
    ADD CONSTRAINT hoteldetails_liceid_key UNIQUE (liceid);


--
-- Name: hoteldetails hoteldetails_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteldetails
    ADD CONSTRAINT hoteldetails_pkey PRIMARY KEY (id);


--
-- Name: hotelphotouplode hotelphotouplode_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelphotouplode
    ADD CONSTRAINT hotelphotouplode_pkey PRIMARY KEY (id);


--
-- Name: hotelregis hotelregis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelregis
    ADD CONSTRAINT hotelregis_pkey PRIMARY KEY (id);


--
-- Name: hotelspec hotelspec_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotelspec
    ADD CONSTRAINT hotelspec_pkey PRIMARY KEY (id);


--
-- Name: hoteluserlogin hoteluserlogin_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteluserlogin
    ADD CONSTRAINT hoteluserlogin_email_key UNIQUE (email);


--
-- Name: hoteluserlogin hoteluserlogin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hoteluserlogin
    ADD CONSTRAINT hoteluserlogin_pkey PRIMARY KEY (id);


--
-- Name: admlogin logdemo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admlogin
    ADD CONSTRAINT logdemo_pkey PRIMARY KEY (id);


--
-- Name: roomadding roomadding_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roomadding
    ADD CONSTRAINT roomadding_pkey PRIMARY KEY (id);


--
-- Name: roomaddingphoto roomaddingphoto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roomaddingphoto
    ADD CONSTRAINT roomaddingphoto_pkey PRIMARY KEY (id);


--
-- Name: states states_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.states
    ADD CONSTRAINT states_pkey PRIMARY KEY (state_id);


--
-- Name: userbooking userbooking_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.userbooking
    ADD CONSTRAINT userbooking_pkey PRIMARY KEY (id);


--
-- Name: userlogin userlogin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.userlogin
    ADD CONSTRAINT userlogin_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--


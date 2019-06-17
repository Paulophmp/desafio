# desafio
##Dump base de dados

--
-- PostgreSQL database dump
--

-- Dumped from database version 10.8 (Ubuntu 10.8-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.8 (Ubuntu 10.8-0ubuntu0.18.04.1)

-- Started on 2019-06-17 08:56:05 -03

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

DROP DATABASE db_desafio;
--
-- TOC entry 2963 (class 1262 OID 16398)
-- Name: db_desafio; Type: DATABASE; Schema: -; Owner: usr_desafio
--

CREATE DATABASE db_desafio WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'pt_BR.UTF-8' LC_CTYPE = 'pt_BR.UTF-8';


ALTER DATABASE db_desafio OWNER TO usr_desafio;

\connect db_desafio

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

--
-- TOC entry 1 (class 3079 OID 13043)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2966 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 41151)
-- Name: migrations; Type: TABLE; Schema: public; Owner: usr_desafio
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO usr_desafio;

--
-- TOC entry 196 (class 1259 OID 41149)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: usr_desafio
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO usr_desafio;

--
-- TOC entry 2967 (class 0 OID 0)
-- Dependencies: 196
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: usr_desafio
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 200 (class 1259 OID 41642)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: usr_desafio
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO usr_desafio;

--
-- TOC entry 204 (class 1259 OID 41659)
-- Name: pedidos; Type: TABLE; Schema: public; Owner: usr_desafio
--

CREATE TABLE public.pedidos (
    id integer NOT NULL,
    produto_name character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    valor character varying(255) NOT NULL,
    data_pedido date NOT NULL,
    cep character varying(255) NOT NULL,
    logradouro character varying(255) NOT NULL,
    bairro character varying(255) NOT NULL,
    uf character varying(255) NOT NULL,
    cidade character varying(255) NOT NULL,
    despachante character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.pedidos OWNER TO usr_desafio;

--
-- TOC entry 203 (class 1259 OID 41657)
-- Name: pedidos_id_seq; Type: SEQUENCE; Schema: public; Owner: usr_desafio
--

CREATE SEQUENCE public.pedidos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pedidos_id_seq OWNER TO usr_desafio;

--
-- TOC entry 2968 (class 0 OID 0)
-- Dependencies: 203
-- Name: pedidos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: usr_desafio
--

ALTER SEQUENCE public.pedidos_id_seq OWNED BY public.pedidos.id;


--
-- TOC entry 202 (class 1259 OID 41651)
-- Name: produtos; Type: TABLE; Schema: public; Owner: usr_desafio
--

CREATE TABLE public.produtos (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    valor double precision NOT NULL,
    qtd_estoque integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.produtos OWNER TO usr_desafio;

--
-- TOC entry 201 (class 1259 OID 41649)
-- Name: produtos_id_seq; Type: SEQUENCE; Schema: public; Owner: usr_desafio
--

CREATE SEQUENCE public.produtos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.produtos_id_seq OWNER TO usr_desafio;

--
-- TOC entry 2969 (class 0 OID 0)
-- Dependencies: 201
-- Name: produtos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: usr_desafio
--

ALTER SEQUENCE public.produtos_id_seq OWNED BY public.produtos.id;


--
-- TOC entry 199 (class 1259 OID 41631)
-- Name: users; Type: TABLE; Schema: public; Owner: usr_desafio
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO usr_desafio;

--
-- TOC entry 198 (class 1259 OID 41629)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: usr_desafio
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO usr_desafio;

--
-- TOC entry 2970 (class 0 OID 0)
-- Dependencies: 198
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: usr_desafio
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 2813 (class 2604 OID 41154)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 2816 (class 2604 OID 41662)
-- Name: pedidos id; Type: DEFAULT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.pedidos ALTER COLUMN id SET DEFAULT nextval('public.pedidos_id_seq'::regclass);


--
-- TOC entry 2815 (class 2604 OID 41654)
-- Name: produtos id; Type: DEFAULT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.produtos ALTER COLUMN id SET DEFAULT nextval('public.produtos_id_seq'::regclass);


--
-- TOC entry 2814 (class 2604 OID 41634)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 2950 (class 0 OID 41151)
-- Dependencies: 197
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: usr_desafio
--

INSERT INTO public.migrations (id, migration, batch) VALUES (49, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (50, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (51, '2019_06_16_030629_create_produto_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (52, '2019_06_16_052206_create_pedido_table', 1);


--
-- TOC entry 2953 (class 0 OID 41642)
-- Dependencies: 200
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: usr_desafio
--



--
-- TOC entry 2957 (class 0 OID 41659)
-- Dependencies: 204
-- Data for Name: pedidos; Type: TABLE DATA; Schema: public; Owner: usr_desafio
--



--
-- TOC entry 2955 (class 0 OID 41651)
-- Dependencies: 202
-- Data for Name: produtos; Type: TABLE DATA; Schema: public; Owner: usr_desafio
--

INSERT INTO public.produtos (id, name, valor, qtd_estoque, created_at, updated_at) VALUES (1, 'camisa PHP', 26, 12, '2019-06-17 01:42:08', '2019-06-17 01:44:21');


--
-- TOC entry 2952 (class 0 OID 41631)
-- Dependencies: 199
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: usr_desafio
--



--
-- TOC entry 2971 (class 0 OID 0)
-- Dependencies: 196
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: usr_desafio
--

SELECT pg_catalog.setval('public.migrations_id_seq', 52, true);


--
-- TOC entry 2972 (class 0 OID 0)
-- Dependencies: 203
-- Name: pedidos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: usr_desafio
--

SELECT pg_catalog.setval('public.pedidos_id_seq', 2, true);


--
-- TOC entry 2973 (class 0 OID 0)
-- Dependencies: 201
-- Name: produtos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: usr_desafio
--

SELECT pg_catalog.setval('public.produtos_id_seq', 1, true);


--
-- TOC entry 2974 (class 0 OID 0)
-- Dependencies: 198
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: usr_desafio
--

SELECT pg_catalog.setval('public.users_id_seq', 1, false);


--
-- TOC entry 2818 (class 2606 OID 41156)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 2827 (class 2606 OID 41667)
-- Name: pedidos pedidos_pkey; Type: CONSTRAINT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.pedidos
    ADD CONSTRAINT pedidos_pkey PRIMARY KEY (id);


--
-- TOC entry 2825 (class 2606 OID 41656)
-- Name: produtos produtos_pkey; Type: CONSTRAINT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.produtos
    ADD CONSTRAINT produtos_pkey PRIMARY KEY (id);


--
-- TOC entry 2820 (class 2606 OID 41641)
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 2822 (class 2606 OID 41639)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: usr_desafio
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 2823 (class 1259 OID 41648)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: usr_desafio
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 2965 (class 0 OID 0)
-- Dependencies: 5
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2019-06-17 08:56:06 -03

--
-- PostgreSQL database dump complete
--

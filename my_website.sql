

CREATE TABLE account (
  ID int NOT NULL,
  Username varchar(200) NOT NULL,
  Password varchar(200) NOT NULL
) ;

INSERT INTO account (ID, Username, Password) VALUES
(1, 'Admin', 'Admin'),
(2, 'Customer', 'Customer'),
(9, '3', '3'),
(10, '3', '3'),
(11, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE catagories (
  CatID int NOT NULL,
  CatName varchar(200) NOT NULL
) ;

INSERT INTO catagories (CatID, CatName) VALUES
(10000, 'Sneaker'),
(20000, 'Leather'),
(30000, 'Lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE customer (
  CusID int NOT NULL,
  CusName varchar(200) NOT NULL,
  CusPhone varchar(200) NOT NULL,
  CusEmail varchar(200) NOT NULL,
  CusAddress varchar(200) NOT NULL,
  CusCity varchar(200) NOT NULL,
  CusState varchar(200) NOT NULL,
 CusZip int NOT NULL,
  CusCreditcardNum int NOT NULL,
  CusNameonCard varchar(200) NOT NULL,
  CusExpmonth varchar(200) NOT NULL,
  CusCVV int NOT NULL,
  CusExpYear int NOT NULL
) ;
--
-- Dumping data for table `customer`
--

INSERT INTO customer (CusID, CusName, CusPhone, CusEmail, CusAddress, CusCity, CusState, CusZip, CusCreditcardNum, CusNameonCard, CusExpmonth, CusCVV, CusExpYear) VALUES
(6001, 'Mr.A', '213141414141', 'A@.gmail.com', '', '', '', 0, 0, '', '', 0, 0),
(6002, 'Mr.B', '235454353', 'B@gmail.com', '', '', '', 0, 0, '', '', 0, 0),
(6003, 'Mr.C', '564321432', 'C@gmail.com', '', '', '', 0, 0, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE orders (
  OrdersID int NOT NULL,
  ProductID int NOT NULL,
  Quantity int NOT NULL
) ;

--
-- Dumping data for table `orders`
--

INSERT INTO orders (OrdersID, ProductID, Quantity) VALUES
(4001, 3001, 0),
(4002, 3002, 0),
(4003, 3003, 0),
(4004, 3004, 0),
(4005, 3005, 0),
(4006, 3006, 0),
(4007, 3007, 0),
(4008, 3008, 0),
(4009, 3009, 0),
(4010, 3010, 0),
(4011, 3011, 0),
(4012, 3012, 0),
(4013, 3013, 0),
(4014, 3014, 0),
(4015, 3015, 0),
(4016, 3016, 0),
(4017, 3017, 0),
(4018, 3018, 0),
(4019, 3019, 0),
(4020, 3020, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetails`
--

CREATE TABLE ordersdetails (
  OrdersdetailsID int NOT NULL,
  OrdersID int NOT NULL,
  ProductID int NOT NULL,
  CusID int NOT NULL,
  OrdersDate varchar NOT NULL,
  Total int NOT NULL
) ;

--
-- Dumping data for table `ordersdetails`
--

INSERT INTO ordersdetails (OrdersdetailsID, OrdersID, ProductID, CusID, OrdersDate, Total) VALUES
(5001, 4001, 3001, 6001, '0000-00-00', 0),
(5002, 4002, 3002, 6002, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE partners (
  PartnerID int NOT NULL,
  PartnerName varchar(200) NOT NULL,
  PartnerPhone varchar(200) NOT NULL,
  PartnerDetails varchar(2000) NOT NULL
) ;

--
-- Dumping data for table `partners`
--

INSERT INTO partners(PartnerID, PartnerName, PartnerPhone, PartnerDetails) VALUES
(1000, 'Lego', '1234555432', 'Lego.com'),
(1001, 'Cosco', '2312434255', 'Cosco.com'),
(1002, 'Munchkin', '143235655', 'Munchkin.com'),
(1003, 'FisherPrice', '23456788888', 'FisherPrice.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE product (
  ProductID int NOT NULL,
  ProductName varchar(200) NOT NULL,
  ProductPrice int NOT NULL,
  ProductImg text NOT NULL,
  CategoryID int NOT NULL,
  ProductDescription text NOT NULL,
  PartnerID int NOT NULL,
  ProductQuantity int NOT NULL
) ;

--
-- Dumping data for table `product`
--

INSERT INTO product (ProductID, ProductName, ProductPrice, ProductImg, CategoryID, ProductDescription, PartnerID, ProductQuantity) VALUES
(3001, 'NMD-R1 PRIMEK NIT STLT ï¿½Triple Blackï¿½ ', 91, 'img/3001.jpg', 10000, 'The revamped upper is highlighted by dual tones of black. Underfoot, a traditional Boost midsole is also dipped in black with matching EVA plugs. For a subtle pop of colour, hidden hints of pink adorn', 1000, 12),
(3002, 'NMD-R1 ï¿½CARBO Nï¿½ ', 100, 'img/3002.png', 10000, 'The NMD_R1 Carbon .....', 1000, 12),
(3003, 'Stan Smith ï¿½Fairwayï¿½ ', 65, 'img/3003.png', 10000, 'the design is distinguished by white fullgrain leather with perforated Three-Stripes atop a matching rubber outsole. The iconic look is completed by green leather accents with classic Trefoil branding', 1000, 12),
(3004, 'WMNS Stan Smith ', 70, 'img/3004.jpg', 10000, 'The iconic OG white colourway features a leather upper atop a matching fulllength rubber outsole with contrasting green on the tongue and heel tab. Perforated Three-Stripes complete the women', 1000, 12),
(3005, 'WMNS Falcon ï¿½Black Pinkï¿½ ', 95, 'img/3005.png', 10000, 'this Falcon appears with a combination of mesh and suede panels with black and pink hues throughout the upper, referencing 90s colour blocking. The fashionforward offering is contrasted with a white m', 1000, 12),
(3006, 'WMNS Falcon ï¿½Crystal White Navyï¿½ ', 90, 'img/3006.jpg', 10000, 'Featuring a white mesh base, the overlays are contrasted with navy and red tones on the suede and leather accents, while the outsole is complemented with purple and orange hits for a retro appeal', 1000, 12),
(3007, 'Keeler Box Leather Boot ï¿½Nightscape', 100, 'img/3007.jpg', 20000, 'made with a high-gloss box leather, this military boot features a lace-up front, derby construction, a padded logo footbed and a rubber sole.  ', 1001, 12),
(3008, 'Keeler Box Leather Boot ‘Black’ ', 100, 'img/3008.jpg', 20000, 'made with a high-gloss box leather, this military boot features a lace-up front, derby construction, a padded logo footbed and a rubber sole. ', 1001, 0),
(3009, 'ROLAND O LEATHE R BOOT ‘New Tan’ ', 150, 'img/3009.jpg', 20000, 'designed with supple calf leather, this modern ankle boot is made with a lace-up front, derby construction, a narrow toe and seaming details', 1001, 0),
(3010, 'ROLAND O LEATHE R BOOT ‘Brown’ ', 150, 'img/3010.jpg', 20000, 'designed with supple calf leather, this modern ankle boot is made with a lace-up front, derby construction, a narrow toe and seaming details', 1001, 0),
(3011, 'LUCIAN O SUEDE BOOT ‘BLACK’ ', 150, 'img/3011.jpg', 20000, 'featuring a bicolour design, this modern boot is made with soft suede, a side zip closure, ankle height styling and a padded logo footbed for added comfort', 1001, 0),
(3012, 'LUCIAN O SUEDE BOOT ‘BROWN', 150, 'img/3012.jpg', 20000, 'featuring a bicolour design, this modern boot is made with soft suede, a side zip closure, ankle height styling and a padded logo footbed for added comfort ', 1001, 0),
(3013, 'LA Light  ‘Black’ ', 120, 'img/3013.png', 30000, 'So if you loved the L.A. Lights Liquid Gold sneakers from the L.A. Gear collection, or if they were a little too flashy for you and you rather have something lowkey then you\'ll love the black L.A. Light', 1002, 0),
(3014, 'LA Light  ‘Red’ ', 120, 'img/3014.png', 30000, 'So if you loved the L.A. Lights Liquid Gold sneakers from the L.A. Gear collection, or if they were a little too flashy for you and you rather have something lowkey then you\'ll love the black L.A. Lig', 1002, 0),
(3015, 'T-RAWW RUNNER ‘Orange’ ', 70, 'img/3015.png', 30000, 'Upper: Orange & Blue Mesh Sole: Translucent with T-Raww Logo Memory Foam Sock \r\n', 1002, 0),
(3016, 'T-RAWW RUNNER \"RED\"', 40, 'img/3016.png', 30000, 'Upper: Orange & Blue MeshSole: Translucent with T-Raww Logo Memory Foam Sock ', 1002, 0),
(3017, 'Classic Clog ‘Tropical Teal’ ', 40, 'img/3017.jpg', 30000, 'Crocs Classic Clogs feature lightweight Iconic Crocs Comfort™, a colour for every personality, and offer an ongoing invitation to be comfortable in your own shoes. ', 1003, 0),
(3018, 'Classic Clog ‘Lilac ', 40, 'img/3018.jpg', 30000, 'Crocs Classic Clogs feature lightweight Iconic Crocs Comfort™, a colour for every personality, and offer an ongoing invitation to be comfortable in your own shoes. \r\n', 1003, 0),
(3019, 'Baya Clog ‘Graphite’ ', 500, 'img/3019.jpg', 30000, 'A twist on our signature Classic Clog, it features the lightweight, durable build you love with advanced ventilation for breathability and to help drain water and debris. \r\n', 1003, 0),
(3020, 'Baya Clog ‘Cerulean Blue’ ', 500, 'img/3020.jpg', 30000, 'A twist on our signature Classic Clog, it features the lightweight, durable build you love with advanced ventilation for breathability and to help drain water and debris. \r\n', 1003, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE account
  ADD PRIMARY KEY (ID);

--
-- Indexes for table `catagories`
--
ALTER TABLE catagories
  ADD PRIMARY KEY (CatID);

--
-- Indexes for table `customer`
--
ALTER TABLE customer
  ADD PRIMARY KEY (CusID);

--
-- Indexes for table `orders`
--
ALTER TABLE orders
  ADD PRIMARY KEY (OrdersID),
  ADD KEY ProductID (ProductID);

--
-- Indexes for table `ordersdetails`
--
ALTER TABLE ordersdetails
  ADD PRIMARY KEY (OrdersdetailsID),
  ADD KEY OrdersID (OrdersID),
  ADD KEY ProductID (ProductID),
  ADD KEY CusID (CusID);

--
-- Indexes for table `partners`
--
ALTER TABLE partners
  ADD PRIMARY KEY (PartnerID);

--
-- Indexes for table `product`
--
ALTER TABLE product
  ADD PRIMARY KEY (ProductID),
  ADD KEY CategoryID (CategoryID),
  ADD KEY PartnerID (PartnerID);

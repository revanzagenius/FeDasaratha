using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class EcommerceController : Controller
    {
        // GET: Ecommerce
        public ActionResult Addproduct()
        {
            return View();
        }
        public ActionResult Customerdetails()
        {
            return View();
        }
        public ActionResult Customers()
        {
            return View();
        }
        public ActionResult Orderdetails()
        {
            return View();
        }
        public ActionResult Orders()
        {
            return View();
        }
        public ActionResult Products()
        {
            return View();
        }
    }
}
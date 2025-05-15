using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class PagesController : Controller
    {
        // GET: Pages
        public ActionResult Faq()
        {
            return View();
        }
        public ActionResult Pricing()
        {
            return View();
        }
        public ActionResult Profile()
        {
            return View();
        }
        public ActionResult Starter()
        {
            return View();
        }
        public ActionResult Timeline()
        {
            return View();
        }
        public ActionResult Error()
        {
            return View();
        }
        public ActionResult E505()
        {
            return View();
        }
        public ActionResult Comingsoon()
        {
            return View();
        }
    }
}